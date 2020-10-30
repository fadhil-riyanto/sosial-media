define('elgg/popup',['elgg','jquery','jquery-ui'],function(elgg,$){var popup={init:function(){$(document).on('click',function(e){if(e.isDefaultPrevented()){return;}
var $eventTargets=$(e.target).parents().andSelf();if($eventTargets.is('.elgg-state-popped')){return;}
popup.close();});popup.init=elgg.nullFunction;},bind:function($triggers){$triggers.off('click.popup').on('click.popup',function(e){if(e.isDefaultPrevented()){return;}
e.preventDefault();e.stopPropagation();popup.open($(this));});},open:function($trigger,$target,position){if(typeof $trigger==='undefined'||!$trigger.length){return;}
if(typeof $target==='undefined'){var href=$trigger.attr('href')||$trigger.data('href')||'';var targetSelector=elgg.getSelectorFromUrlFragment(href);$target=$(targetSelector);}else{$target.uniqueId();var targetSelector='#'+$target.attr('id');}
if(!$target.length){return;}
var params={targetSelector:targetSelector,target:$target,source:$trigger};position=position||{my:'center top',at:'center bottom',of:$trigger,collision:'fit fit'};$.extend(position,$trigger.data('position'));position=elgg.trigger_hook('getOptions','ui.popup',params,position);if(!position){return;}
popup.init();if($target.is('.elgg-state-popped')){popup.close($target);return;}
popup.close();$target.data('trigger',$trigger);$target.data('position',position);if(!$trigger.is('.elgg-popup-inline')){$target.appendTo('body');$(document).one('scroll',function(){popup.close();});}
$target.position(position).fadeIn().addClass('elgg-state-active elgg-state-popped').position(position);$trigger.addClass('elgg-state-active');$target.trigger('open');},close:function($targets){if(typeof $targets==='undefined'){$targets=$('.elgg-state-popped');}
if(!$targets.length){return;}
$targets.each(function(){var $target=$(this);if(!$target.is(':visible')){return;}
var $trigger=$target.data('trigger');if($trigger.length){$trigger.removeClass('elgg-state-active');}
$target.fadeOut().removeClass('elgg-state-active elgg-state-popped');$target.trigger('close');});}};return popup;});var elgg=elgg||{};elgg.global=this;elgg.ACCESS_PRIVATE=0;elgg.nullFunction=function(){};elgg.abstractMethod=function(){throw new Error("Oops... you forgot to implement an abstract method!");};elgg.extend=jQuery.extend;elgg.isArray=jQuery.isArray;elgg.isFunction=jQuery.isFunction;elgg.isPlainObject=jQuery.isPlainObject;elgg.isString=function(val){return typeof val==='string';};elgg.isNumber=function(val){return typeof val==='number';};elgg.isObject=function(val){return typeof val==='object';};elgg.isUndefined=function(val){return val===undefined;};elgg.isNull=function(val){return val===null;};elgg.isNullOrUndefined=function(val){return val==null;};elgg.assertTypeOf=function(type,val){if(typeof val!==type){throw new TypeError("Expecting param of "+
arguments.caller+"to be a(n) "+type+"."+"  Was actually a(n) "+typeof val+".");}};elgg.require=function(pkg){elgg.assertTypeOf('string',pkg);var parts=pkg.split('.'),cur=elgg.global,part,i;for(i=0;i<parts.length;i+=1){part=parts[i];cur=cur[part];if(elgg.isUndefined(cur)){throw new Error("Missing package: "+pkg);}}};elgg.provide=function(pkg,opt_context){var parts,context=opt_context||elgg.global,part,i;if(elgg.isArray(pkg)){parts=pkg;}else{elgg.assertTypeOf('string',pkg);parts=pkg.split('.');}
for(i=0;i<parts.length;i+=1){part=parts[i];context[part]=context[part]||{};context=context[part];}};elgg.inherit=function(Child,Parent){Child.prototype=new Parent();Child.prototype.constructor=Child;};elgg.normalize_url=function(url){url=url||'';elgg.assertTypeOf('string',url);function validate(url){url=elgg.parse_url(url);if(url.scheme){url.scheme=url.scheme.toLowerCase();}
if(url.scheme=='http'||url.scheme=='https'){if(!url.host){return false;}
if(!(new RegExp("^([a-zA-Z0-9][a-zA-Z0-9\\-\\.]*)$","i")).test(url.host)||url.host.charAt(-1)=='.'){return false;}}
if(!url.scheme||!url.host&&url.scheme!='mailto'&&url.scheme!='news'&&url.scheme!='file'){return false;}
return true;};if(url.indexOf('http:')===0||url.indexOf('https:')===0||url.indexOf('javascript:')===0||url.indexOf('mailto:')===0){return url;}else if(validate(url)){return url;}else if((new RegExp("^(\\#|\\?|//)","i")).test(url)){return url;}else if((new RegExp("^[^\/]*\\.php(\\?.*)?$","i")).test(url)){return elgg.config.wwwroot+url.ltrim('/');}else if((new RegExp("^[^/\\?\\#]*\\.","i")).test(url)){return'http://'+url;}else{return elgg.config.wwwroot+url.ltrim('/');}};elgg.system_messages=function(msgs,delay,type){if(elgg.isUndefined(msgs)){return;}
var classes=['elgg-message'],messages_html=[],appendMessage=function(msg){messages_html.push('<li><div class="'+classes.join(' ')+'"><div class="elgg-inner"><div class="elgg-body">'+msg+'</div></div></div></li>');},systemMessages=$('ul.elgg-system-messages'),i;delay=parseInt(delay||6000,10);if(isNaN(delay)||delay<=0){delay=6000;}
if(!elgg.isArray(msgs)){msgs=[msgs];}
if(type==='error'){classes.push('elgg-message-error');}else{classes.push('elgg-message-success');}
msgs.forEach(appendMessage);if(type!='error'){$(messages_html.join('')).appendTo(systemMessages).animate({opacity:'1.0'},delay).fadeOut('slow');}else{$(messages_html.join('')).appendTo(systemMessages);}};elgg.clear_system_messages=function(){$('ul.elgg-system-messages').empty();};elgg.system_message=function(msgs,delay){elgg.system_messages(msgs,delay,"message");};elgg.register_error=function(errors,delay){elgg.system_messages(errors,delay,"error");};elgg.deprecated_notice=function(msg,dep_version){if(elgg.is_admin_logged_in()){msg="Deprecated in Elgg "+dep_version+": "+msg;if(typeof console!=="undefined"){console.info(msg);}}};elgg.forward=function(url){var dest=elgg.normalize_url(url);if(dest==location.href){location.reload();}
$(window).on('hashchange',function(){location.reload();});location.href=dest;};elgg.parse_url=function(url,component,expand){expand=expand||false;component=component||false;var re_str='^(?:(?![^:@]+:[^:@/]*@)([^:/?#.]+):)?(?://)?'
+'((?:(([^:@]*)(?::([^:@]*))?)?@)?'
+'([^:/?#]*)(?::(\\d*))?)'
+'(((/(?:[^?#](?![^?#/]*\\.[^?#/.]+(?:[?#]|$)))*/?)?([^?#/]*))'
+'(?:\\?([^#]*))?'
+'(?:#(.*))?)';var keys={1:"scheme",4:"user",5:"pass",6:"host",7:"port",9:"path",12:"query",13:"fragment"};var results={};if(url.indexOf('mailto:')===0){results['scheme']='mailto';results['path']=url.replace('mailto:','');return results;}
if(url.indexOf('javascript:')===0){results['scheme']='javascript';results['path']=url.replace('javascript:','');return results;}
var re=new RegExp(re_str);var matches=re.exec(url);for(var i in keys){if(matches[i]){results[keys[i]]=matches[i];}}
if(expand&&typeof(results['query'])!='undefined'){results['query']=elgg.parse_str(results['query']);}
if(component){if(typeof(results[component])!='undefined'){return results[component];}else{return false;}}
return results;};elgg.parse_str=function(string){var params={},result,key,value,re=/([^&=]+)=?([^&]*)/g,re2=/\[\]$/;while(result=re.exec(string)){key=decodeURIComponent(result[1].replace(/\+/g,' '));value=decodeURIComponent(result[2].replace(/\+/g,' '));if(re2.test(key)){key=key.replace(re2,'');if(!params[key]){params[key]=[];}
params[key].push(value);}else{params[key]=value;}}
return params;};elgg.getSelectorFromUrlFragment=function(url){var fragment=url.split('#')[1];if(fragment){if(fragment.indexOf('.')>-1){return fragment;}else{return'#'+fragment;}}
return'';};elgg.push_to_object_array=function(object,parent,value){elgg.assertTypeOf('object',object);elgg.assertTypeOf('string',parent);if(!(object[parent]instanceof Array)){object[parent]=[];}
if($.inArray(value,object[parent])<0){return object[parent].push(value);}
return false;};elgg.is_in_object_array=function(object,parent,value){elgg.assertTypeOf('object',object);elgg.assertTypeOf('string',parent);return typeof(object[parent])!='undefined'&&$.inArray(value,object[parent])>=0;};elgg.ElggEntity=function(o){$.extend(this,o);};elgg.ElggUser=function(o){elgg.ElggEntity.call(this,o);};elgg.inherit(elgg.ElggUser,elgg.ElggEntity);elgg.ElggUser.prototype.isAdmin=function(){return this.admin;};elgg.ElggPriorityList=function(){this.length=0;this.priorities_=[];};elgg.ElggPriorityList.prototype.insert=function(obj,opt_priority){var priority=500;if(arguments.length==2&&opt_priority!==undefined){priority=parseInt(opt_priority,10);}
priority=Math.max(priority,0);if(elgg.isUndefined(this.priorities_[priority])){this.priorities_[priority]=[];}
this.priorities_[priority].push(obj);this.length++;};elgg.ElggPriorityList.prototype.forEach=function(callback){elgg.assertTypeOf('function',callback);var index=0;this.priorities_.forEach(function(elems){elems.forEach(function(elem){callback(elem,index++);});});return this;};elgg.ElggPriorityList.prototype.every=function(callback){elgg.assertTypeOf('function',callback);var index=0;return this.priorities_.every(function(elems){return elems.every(function(elem){return callback(elem,index++);});});};elgg.ElggPriorityList.prototype.remove=function(obj){this.priorities_.forEach(function(elems){var index;while((index=elems.indexOf(obj))!==-1){elems.splice(index,1);this.length--;}});};if(!Array.prototype.every){Array.prototype.every=function(callback){var len=this.length,i;for(i=0;i<len;i++){if(i in this&&!callback.call(null,this[i],i)){return false;}}
return true;};}
if(!Array.prototype.forEach){Array.prototype.forEach=function(callback){var len=this.length,i;for(i=0;i<len;i++){if(i in this){callback.call(null,this[i],i);}}};}
if(!String.prototype.ltrim){String.prototype.ltrim=function(str){if(this.indexOf(str)===0){return this.substring(str.length);}else{return this;}};}
elgg.provide('elgg.config.hooks');elgg.provide('elgg.config.instant_hooks');elgg.provide('elgg.config.triggered_hooks');!function(){var index=0;elgg.register_hook_handler=function(name,type,handler,priority){elgg.assertTypeOf('string',name);elgg.assertTypeOf('string',type);elgg.assertTypeOf('function',handler);if(!name||!type){return false;}
var hooks=elgg.config.hooks;elgg.provide([name,type],hooks);if(!hooks[name][type].length){hooks[name][type]=[];}
if(elgg.is_instant_hook(name,type)&&elgg.is_triggered_hook(name,type)){handler(name,type,null,null);}
hooks[name][type].push({priority:priority,index:index++,handler:handler});return true;}}();elgg.trigger_hook=function(name,type,params,value){elgg.assertTypeOf('string',name);elgg.assertTypeOf('string',type);elgg.set_triggered_hook(name,type);value=!elgg.isNullOrUndefined(value)?value:null;var hooks=elgg.config.hooks,registrations=[],push=Array.prototype.push;elgg.provide([name,type],hooks);elgg.provide(['all',type],hooks);elgg.provide([name,'all'],hooks);elgg.provide(['all','all'],hooks);if(hooks[name][type].length){if(name!=='all'&&type!=='all'){push.apply(registrations,hooks[name][type]);}}
if(hooks['all'][type].length){if(type!=='all'){push.apply(registrations,hooks['all'][type]);}}
if(hooks[name]['all'].length){if(name!=='all'){push.apply(registrations,hooks[name]['all']);}}
if(hooks['all']['all'].length){push.apply(registrations,hooks['all']['all']);}
registrations.sort(function(a,b){if(a.priority<b.priority){return-1;}
if(a.priority>b.priority){return 1;}
return(a.index<b.index)?-1:1;});$.each(registrations,function(i,registration){var handler_return=registration.handler(name,type,params,value);if(!elgg.isNullOrUndefined(handler_return)){value=handler_return;}});return value;};elgg.register_instant_hook=function(name,type){elgg.assertTypeOf('string',name);elgg.assertTypeOf('string',type);return elgg.push_to_object_array(elgg.config.instant_hooks,name,type);};elgg.is_instant_hook=function(name,type){return elgg.is_in_object_array(elgg.config.instant_hooks,name,type);};elgg.set_triggered_hook=function(name,type){return elgg.push_to_object_array(elgg.config.triggered_hooks,name,type);};elgg.is_triggered_hook=function(name,type){return elgg.is_in_object_array(elgg.config.triggered_hooks,name,type);};elgg.register_instant_hook('init','system');elgg.register_instant_hook('ready','system');elgg.register_instant_hook('boot','system');elgg.provide('elgg.security.token');elgg.security.tokenRefreshTimer=null;elgg.security.setToken=function(token_object,valid_tokens){elgg.security.token=token_object;$('[name=__elgg_ts]').val(token_object.__elgg_ts);$('[name=__elgg_token]').each(function(){if(valid_tokens[$(this).val()]){$(this).val(token_object.__elgg_token);}});$('[href*="__elgg_ts"][href*="__elgg_token"]').each(function(){var token=this.href.match(/__elgg_token=([0-9a-z_-]+)/i)[1];if(valid_tokens[token]){this.href=this.href.replace(/__elgg_ts=\d+/i,'__elgg_ts='+token_object.__elgg_ts).replace(/__elgg_token=[0-9a-z_-]+/i,'__elgg_token='+token_object.__elgg_token);}});};elgg.security.refreshToken=function(){var pairs={};pairs[elgg.security.token.__elgg_ts+','+elgg.security.token.__elgg_token]=1;$('form').each(function(){var ts=$('[name=__elgg_ts]:last',this).val();var token=$('[name=__elgg_token]:last',this).val();if(token){pairs[ts+','+token]=1;}});$('[href*="__elgg_ts"][href*="__elgg_token"]').each(function(){var ts=this.href.match(/__elgg_ts=(\d+)/i)[1];var token=this.href.match(/__elgg_token=([0-9a-z_-]+)/i)[1];pairs[ts+','+token]=1;});pairs=$.map(pairs,function(val,key){return key;});elgg.ajax('refresh_token',{data:{pairs:pairs,session_token:elgg.session.token},dataType:'json',method:'POST',success:function(data){if(data){elgg.session.token=data.session_token;elgg.security.setToken(data.token,data.valid_tokens);if(elgg.get_logged_in_user_guid()!=data.user_guid){elgg.session.user=null;clearInterval(elgg.security.tokenRefreshTimer);if(data.user_guid){elgg.register_error(elgg.echo('session_changed_user'));}else{elgg.register_error(elgg.echo('session_expired'));}}}},error:function(){}});};elgg.security.addToken=function(data){if(elgg.isString(data)){var parts=elgg.parse_url(data),args={},base='';if(parts['host']===undefined){if(data.indexOf('?')===0){base='?';args=elgg.parse_str(parts['query']);}}else{if(parts['query']!==undefined){args=elgg.parse_str(parts['query']);}
var split=data.split('?');base=split[0]+'?';}
args["__elgg_ts"]=elgg.security.token.__elgg_ts;args["__elgg_token"]=elgg.security.token.__elgg_token;return base+jQuery.param(args);}
if(elgg.isUndefined(data)){return elgg.security.token;}
if(elgg.isPlainObject(data)){return elgg.extend(data,elgg.security.token);}
if(data instanceof FormData){data.set('__elgg_ts',elgg.security.token.__elgg_ts);data.set('__elgg_token',elgg.security.token.__elgg_token);return data;}
throw new TypeError("elgg.security.addToken not implemented for "+(typeof data)+"s");};elgg.security.init=function(){elgg.security.tokenRefreshTimer=setInterval(elgg.security.refreshToken,elgg.security.interval);};elgg.register_hook_handler('boot','system',elgg.security.init);elgg.provide('elgg.config.translations');elgg.config.language='en';elgg.add_translation=function(lang,translations){elgg.provide('elgg.config.translations.'+lang);elgg.extend(elgg.config.translations[lang],translations);};elgg.get_language=function(){return elgg.config.current_language;};elgg.echo=function(key,argv,language){if(elgg.isString(argv)){language=argv;argv=[];}
var translations=elgg.config.translations,dlang=elgg.get_language(),map;language=language||dlang;argv=argv||[];map=translations[language]||translations[dlang];if(map&&elgg.isString(map[key])){return vsprintf(map[key],argv);}
return key;};elgg.provide('elgg.ajax');elgg.ajax=function(url,options){options=elgg.ajax.handleOptions(url,options);options.url=elgg.normalize_url(options.url);return $.ajax(options);};elgg.ajax.SUCCESS=0;elgg.ajax.ERROR=-1;elgg.ajax.handleOptions=function(url,options){var data_only=true,data,member;if(elgg.isString(url)){options=options||{};}else{options=url||{};url=options.url;}
if(elgg.isFunction(options)){data_only=false;options={success:options};}
if(options.data){data_only=false;}else{for(member in options){if(elgg.isFunction(options[member])){data_only=false;}}}
if(data_only){data=options;options={data:data};}
if(!elgg.isFunction(options.error)){options.error=elgg.ajax.handleAjaxError;}
if(url){options.url=url;}
return options;};elgg.ajax.handleAjaxError=function(xhr,status,error){if(!xhr.getAllResponseHeaders()){return;}
elgg.register_error(elgg.echo('ajax:error'));};elgg.get=function(url,options){options=elgg.ajax.handleOptions(url,options);options.type='get';return elgg.ajax(options);};elgg.getJSON=function(url,options){options=elgg.ajax.handleOptions(url,options);options.dataType='json';return elgg.get(options);};elgg.post=function(url,options){options=elgg.ajax.handleOptions(url,options);options.type='post';return elgg.ajax(options);};elgg.action=function(action,options){elgg.assertTypeOf('string',action);if(action.indexOf('action/')<0){action='action/'+action;}
options=elgg.ajax.handleOptions(action,options);if(!elgg.isString(options.data)||options.data.indexOf('__elgg_ts')==-1){options.data=elgg.security.addToken(options.data);}
options.dataType='json';var custom_success=options.success||elgg.nullFunction;options.success=function(json,two,three,four){if(json&&json.system_messages){elgg.register_error(json.system_messages.error);elgg.system_message(json.system_messages.success);}
custom_success(json,two,three,four);};return elgg.post(options);};elgg.api=function(method,options){elgg.assertTypeOf('string',method);var defaults={dataType:'json',data:{}};options=elgg.ajax.handleOptions(method,options);options=$.extend(defaults,options);options.url='services/api/rest/'+options.dataType+'/';options.data.method=method;return elgg.ajax(options);};elgg.provide('elgg.session');elgg.session.cookie=function(name,value,options){var cookies=[],cookie=[],i=0,date,valid=true;if(elgg.isUndefined(name)){return document.cookie;}
if(elgg.isUndefined(value)){if(document.cookie&&document.cookie!==''){cookies=document.cookie.split(';');for(i=0;i<cookies.length;i+=1){cookie=jQuery.trim(cookies[i]).split('=');if(cookie[0]===name){return decodeURIComponent(cookie[1]);}}}
return undefined;}
options=options||{};if(elgg.isNull(value)){value='';options.expires=-1;}
cookies.push(name+'='+value);if(options.expires){if(elgg.isNumber(options.expires)){date=new Date();date.setTime(date.getTime()+(options.expires*24*60*60*1000));}else if(options.expires.toUTCString){date=options.expires;}
if(date){cookies.push('expires='+date.toUTCString());}}
if(options.path){cookies.push('path='+(options.path));}
if(options.domain){cookies.push('domain='+(options.domain));}
if(options.secure){cookies.push('secure');}
document.cookie=cookies.join('; ');};elgg.get_logged_in_user_entity=function(){return elgg.session.user;};elgg.get_logged_in_user_guid=function(){var user=elgg.get_logged_in_user_entity();return user?user.guid:0;};elgg.is_logged_in=function(){return(elgg.get_logged_in_user_entity()instanceof elgg.ElggUser);};elgg.is_admin_logged_in=function(){var user=elgg.get_logged_in_user_entity();return(user instanceof elgg.ElggUser)&&user.isAdmin();};if(elgg.session.user){elgg.session.user=new elgg.ElggUser(elgg.session.user);}
elgg.get_page_owner_guid=function(){if(elgg.page_owner!==undefined){return elgg.page_owner.guid;}else{return 0;}};elgg.provide('elgg.config');elgg.get_site_url=function(){return elgg.config.wwwroot;};elgg.get_simplecache_url=function(view,subview){elgg.assertTypeOf('string',view);var lastcache,path;if(elgg.config.simplecache_enabled){lastcache=elgg.config.lastcache;}else{lastcache=0;}
if(!subview){path='/cache/'+lastcache+'/'+elgg.config.viewtype+'/'+view;}else{elgg.assertTypeOf('string',subview);if((view==='js'||view==='css')&&0===subview.indexOf(view+'/')){subview=subview.substr(view.length+1);}
path='/cache/'+lastcache+'/'+elgg.config.viewtype+'/'+view+'/'+subview;}
return elgg.normalize_url(path);};elgg.provide('elgg.ui');elgg.ui.init=function(){$('.elgg-page').attr("onclick","return true");elgg.ui.initHoverMenu();$(document).on('click','.elgg-system-messages .elgg-message',function(e){if(!$(e.target).is('a')){var $this=$(this);$this.clearQueue().slideUp(100,function(){$this.remove();});}});$('.elgg-page-default .elgg-system-messages .elgg-message').parent().animate({opacity:0.9},6000);$('.elgg-page-default .elgg-system-messages .elgg-message-success').parent().fadeOut('slow');$(document).on('click','[rel=toggle]',elgg.ui.toggles);require(['elgg/popup'],function(popup){popup.bind($('[rel="popup"]'));});$(document).on('click','*[data-confirm]',elgg.ui.requiresConfirmation);var elementId=elgg.getSelectorFromUrlFragment(document.URL);$(elementId).addClass('elgg-state-highlight');};elgg.ui.toggles=function(event){event.preventDefault();var $this=$(this),selector=$this.data().toggleSelector;if(!selector){selector=$this.attr('href');}
var $elements=$(selector);$this.toggleClass('elgg-state-active');$elements.each(function(index,elem){var $elem=$(elem);if($elem.data().toggleSlide!=false){$elem.slideToggle('medium');}else{$elem.toggle();}});$this.trigger('elgg_ui_toggle',[{$toggled_elements:$elements}]);};elgg.ui.initHoverMenu=function(parent){function loadMenu(mac,callback){var $all_placeholders=$(".elgg-menu-hover[rel='"+mac+"']");if(!$all_placeholders.length){return;}
require(['elgg/Ajax'],function(Ajax){var ajax=new Ajax();ajax.view('navigation/menu/user_hover/contents',{data:$all_placeholders.eq(0).data('elggMenuData'),success:function(data){if(data){$all_placeholders.html($(data));}
if(typeof callback==='function'){callback();}},complete:function(){$all_placeholders.removeAttr('data-menu-placeholder data-elgg-menu-data');}});});};function showPopup($icon){var $hovermenu=$icon.data('hovermenu')||null;if(!$hovermenu){$hovermenu=$icon.parent().find(".elgg-menu-hover");$icon.data('hovermenu',$hovermenu);}
require(['elgg/popup'],function(popup){if($hovermenu.is(':visible')){popup.close($hovermenu);}else{popup.open($icon,$hovermenu,{'my':'left top','at':'left top','of':$icon.closest(".elgg-avatar"),'collision':'fit fit'});}});};if(!parent){parent=document;}
$(document).on('click',".elgg-avatar-menu > a",function(e){e.preventDefault();var $icon=$(this);var $placeholder=$icon.parent().find(".elgg-menu-hover[data-menu-placeholder]");if($placeholder.length){loadMenu($placeholder.attr("rel"),function(){showPopup($icon);});}else{showPopup($icon);}});};elgg.ui.requiresConfirmation=function(e){var confirmText=$(this).data('confirm')||elgg.echo('question:areyousure');if(!confirm(confirmText)){e.preventDefault();e.stopPropagation();e.stopImmediatePropagation();return false;}};elgg.ui.registerTogglableMenuItems=function(menuItemNameA,menuItemNameB){require(['navigation/menu/elements/item_toggle'],function(){menuItemNameA=menuItemNameA.replace('_','-');menuItemNameB=menuItemNameB.replace('_','-');$('.elgg-menu-item-'+menuItemNameA+' a').not('[data-toggle]').attr('data-toggle',menuItemNameB);$('.elgg-menu-item-'+menuItemNameB+' a').not('[data-toggle]').attr('data-toggle',menuItemNameA);});};elgg.register_hook_handler('init','system',elgg.ui.init);elgg.data={"lightbox":{"current":"image {current} of {total}","previous":"<span class=\"elgg-icon elgg-icon-caret-left fas fa-caret-left\"><\/span>","next":"<span class=\"elgg-icon elgg-icon-caret-right fas fa-caret-right\"><\/span>","close":"<span class=\"elgg-icon elgg-icon-times fas fa-times\"><\/span>","opacity":0.5,"maxWidth":"990px","maxHeight":"990px","initialWidth":"300px","initialHeight":"300px"},"likes_states":{"unliked":{"html":"<span class=\"elgg-icon elgg-icon-thumbs-up fas fa-thumbs-up\"><\/span>","title":"Like this","action":"likes\/add","next_state":"liked"},"liked":{"html":"<span class=\"elgg-icon elgg-icon-thumbs-up elgg-state-active fas fa-thumbs-up\"><\/span>","title":"Unlike this","action":"likes\/delete","next_state":"unliked"}}};elgg.version=2017041200;elgg.release="3.3.11";elgg.config.wwwroot="http:\/\/localhost\/elgg\/elgg-3.3.11\/";elgg.security.interval=2397600;elgg.config.language="en";elgg.data=$.extend(true,{},elgg.data,elgg._data);delete elgg._data;define('jquery',function(){return jQuery;});define('jquery-ui');define('jquery-ui/datepicker',jQuery.datepicker);define('elgg',['sprintf','jquery','languages/'+elgg.get_language(),'weakmap-polyfill','formdata-polyfill'],function(vsprintf,$,translations){elgg.add_translation(elgg.get_language(),translations);return elgg;});require(['elgg']);if(!window._require_queue){if(window.console){console.log('Elgg\'s require() shim is not defined. Do not override the view "page/elements/head".');}}else{while(_require_queue.length){require.apply(null,_require_queue.shift());}
delete window._require_queue;}
elgg.trigger_hook('boot','system');require(['elgg/init','elgg/ready','elgg/lightbox']);require(['jquery','elgg'],function($,elgg){elgg.register_hook_handler('init','system',function(){$('.elgg-menu-item-bookmark > a').each(function(){this.href+='&title='+encodeURIComponent(document.title);});});});require(['jquery','elgg'],function($,elgg){elgg.register_hook_handler('init','system',function(){$(document).on('click','#messages-toggle',function(){$('input[type=checkbox]').click();});});});