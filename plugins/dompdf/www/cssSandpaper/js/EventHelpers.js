
var EventHelpers=new function(){var me=this;var safariTimer;var isSafari=/WebKit/i.test(navigator.userAgent);var globalEvent;me.init=function(){if(me.hasPageLoadHappened(arguments)){return;}
if(document.createEventObject){globalEvent=document.createEventObject();}else if(document.createEvent){globalEvent=document.createEvent("HTMLEvents");}
me.docIsLoaded=true;}
me.addEvent=function(obj,evType,fn){if(obj.addEventListener){obj.addEventListener(evType,fn,false);}else if(obj.attachEvent){obj['e'+evType+fn]=fn;obj[evType+fn]=function(){obj["e"+evType+fn](self.event);}
obj.attachEvent("on"+evType,obj[evType+fn]);}}
me.removeEvent=function(obj,evType,fn){if(obj.removeEventListener){obj.removeEventListener(evType,fn,false);}else if(obj.detachEvent){try{obj.detachEvent("on"+evType,obj[evType+fn]);obj[evType+fn]=null;obj["e"+evType+fn]=null;}
catch(ex){}}}
function removeEventAttribute(obj,beginName){var attributes=obj.attributes;for(var i=0;i<attributes.length;i++){var attribute=attributes[i]
var name=attribute.name
if(name.indexOf(beginName)==0){attribute.specified=false;}}}
me.addScrollWheelEvent=function(obj,fn){if(obj.addEventListener){obj.addEventListener('DOMMouseScroll',fn,true);}
if(obj.attachEvent){obj.attachEvent("onmousewheel",fn);}}
me.removeScrollWheelEvent=function(obj,fn){if(obj.removeEventListener){obj.removeEventListener('DOMMouseScroll',fn,true);}
if(obj.detachEvent){obj.detatchEvent("onmousewheel",fn);}}
me.getMouseX=function(e){if(!e){return;}
if(e.pageX!=null){return e.pageX;}else if(window.event!=null&&window.event.clientX!=null&&document.body!=null&&document.body.scrollLeft!=null)
return window.event.clientX+document.body.scrollLeft;else if(e.clientX!=null)
return e.clientX;else
return null;}
me.getMouseY=function(e){if(e.pageY!=null)
return e.pageY;else if(window.event!=null&&window.event.clientY!=null&&document.body!=null&&document.body.scrollTop!=null)
return window.event.clientY+document.body.scrollTop;else if(e.clientY!=null){return e.clientY;}}
me.getScrollWheelDelta=function(e){var delta=0;if(!e)
e=window.event;if(e.wheelDelta){delta=e.wheelDelta/120;if(window.opera){delta=-delta;}}else if(e.detail){delta=-e.detail/3;}
return delta}
me.addMouseEvent=function(func){if(document.captureEvents){document.captureEvents(Event.MOUSEMOVE);}
document.onmousemove=func;window.onmousemove=func;window.onmouseover=func;}
me.getEventTarget=function(e){if(e.toElement){return e.toElement;}else if(e.currentTarget){return e.currentTarget;}else if(e.srcElement){return e.srcElement;}else{return null;}}
me.getKey=function(e){if(e.keyCode){return e.keyCode;}else if(e.event&&e.event.keyCode){return window.event.keyCode;}else if(e.which){return e.which;}}
me.addPageLoadEvent=function(funcName){var func=eval(funcName);if(isSafari){pageLoadEventArray.push(func);if(!safariTimer){safariTimer=setInterval(function(){if(/loaded|complete/.test(document.readyState)){clearInterval(safariTimer);me.runPageLoadEvents();return;}
set=true;},10);}}else if(document.addEventListener){var x=document.addEventListener("DOMContentLoaded",func,null);}else{me.addEvent(window,'load',func);}}
var pageLoadEventArray=new Array();me.runPageLoadEvents=function(e){if(isSafari||e.srcElement.readyState=="complete"){for(var i=0;i<pageLoadEventArray.length;i++){pageLoadEventArray[i]();}}}
me.hasPageLoadHappened=function(funcArgs){if(funcArgs.callee.done)
return true;funcArgs.callee.done=true;}
me.preventDefault=function(e){if(e.preventDefault){e.preventDefault();}
try{e.returnValue=false;}
catch(ex){}}
me.cancelBubble=function(e){if(e.stopPropagation){e.stopPropagation();}
try{e.cancelBubble=true;}
catch(ex){}}
me.fireEvent=function(element,event,options){if(!element){return;}
if(document.createEventObject){return element.fireEvent('on'+event,globalEvent)
jslog.debug('ss');}
else{globalEvent.initEvent(event,true,true);return!element.dispatchEvent(globalEvent);}}
function init(){}
init();}
EventHelpers.addPageLoadEvent('EventHelpers.init');