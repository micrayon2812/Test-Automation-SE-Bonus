YUI.add("moodle-editor_atto-plugin",function(u,t){var n,i,l,a,o,h,c,d;function e(){e.superclass.constructor.apply(this,arguments)}function s(){}function r(){}n=".atto_group.",i="_group",u.extend(e,u.Base,{name:null,editor:null,toolbar:null,initializer:function(t){this.name=t.name,this.toolbar=t.toolbar,this.editor=t.editor,this.buttons={},this.buttonNames=[],this.buttonStates={},this.menus={},this._primaryKeyboardShortcut=[],this._buttonHandlers=[],this._menuHideHandlers=[],this._highlightQueue={}},markUpdated:function(){return this.get("host").saveSelection(),this.get("host").updateOriginal()}},{NAME:"editorPlugin",ATTRS:{host:{writeOnce:!0},group:{writeOnce:!0,getter:function(t){var e=this.toolbar.one(n+t+i);return e||(e=u.Node.create('<div class="atto_group '+t+i+'"></div>'),this.toolbar.append(e)),e}}}}),u.namespace("M.editor_atto").EditorPlugin=e,l='<button class="{{buttonClass}} atto_hasmenu" id="{{id}}" tabindex="-1" title="{{title}}" type="button" aria-haspopup="true" aria-controls="{{id}}_menu"><span class="editor_atto_menu_icon"></span><span class="editor_atto_menu_expand"></span></button>',a="disabled",o="highlight",h=".editor_atto_content",c=".editor_atto_menu_icon",d=".editor_atto_menu_expand",s.ATTRS={},s.prototype={buttons:null,buttonNames:null,buttonStates:null,menus:null,DISABLED:0,ENABLED:1,_buttonHandlers:null,_menuHideHandlers:null,_primaryKeyboardShortcut:null,_highlightQueue:null,addButton:function(e){var n,i,o,t=this.get("group"),a=this.name,s="atto_"+a+"_button",r=this.get("host");return e.exec&&(s=s+"_"+e.exec),e.buttonName?s=s+"_"+e.buttonName:e.buttonName=e.exec||a,e.buttonClass=s,(e=this._normalizeIcon(e)).title||(e.title="pluginname"),i=M.util.get_string(e.title,"atto_"+a),(n=u.Node.create('<button type="button" class="'+s+'"tabindex="-1"></button>')).setAttribute("title",i),window.require(["core/templates"],function(t){t.renderPix(e.icon,e.iconComponent,i).then(function(t){n.append(t)})}),t.append(n),this.toolbar.getAttribute("aria-activedescendant")||(n.setAttribute("tabindex","0"),this.toolbar.setAttribute("aria-activedescendant",n.generateID()),this.get("host")._tabFocus=n),e=this._normalizeCallback(e),this._buttonHandlers.push(this.toolbar.delegate("click",e.callback,"."+s,this)),e.keys&&("undefined"!=typeof e.keyDescription&&(this._primaryKeyboardShortcut[s]=e.keyDescription),this._addKeyboardListener(e.callback,e.keys,s),this._primaryKeyboardShortcut[s]&&n.setAttribute("title",M.util.get_string("plugin_title_shortcut","editor_atto",{title:i,shortcut:this._primaryKeyboardShortcut[s]}))),e.tags&&(o=!0,"boolean"==typeof e.tagMatchRequiresAll&&(o=e.tagMatchRequiresAll),this._buttonHandlers.push(r.on(["atto:selectionchanged","change"],function(t){"undefined"!=typeof this._highlightQueue[e.buttonName]&&this._highlightQueue[e.buttonName].cancel(),this._highlightQueue[e.buttonName]=u.soon(u.bind(function(t){r.selectionFilterMatches(e.tags,t.selectedNodes,o)?this.highlightButtons(e.buttonName):this.unHighlightButtons(e.buttonName)},this,t))},this))),this.buttonNames.push(e.buttonName),this.buttons[e.buttonName]=n,this.buttonStates[e.buttonName]=this.ENABLED,n},addBasicButton:function(t){return t.exec?(t.icon||(t.icon="e/"+t.exec),t.callback=function(){document.execCommand(t.exec,!1,null),this.markUpdated()},this.addButton(t)):null},addToolbarMenu:function(e){var n,i,t,o,a=this.get("group"),s=this.name,r="atto_"+s+"_button";return e.buttonName?r=r+"_"+e.buttonName:e.buttonName=s,e.buttonClass=r,(e=this._normalizeIcon(e)).title||(e.title="pluginname"),i=M.util.get_string(e.title,"atto_"+s),e.menuColor||(e.menuColor="transparent"),t="atto_"+s+"_menubutton_"+u.stamp(this),o=u.Handlebars.compile(l),n=u.Node.create(o({buttonClass:r,config:e,title:i,id:t})),e.buttonId=t,window.require(["core/templates"],function(t){t.renderPix(e.icon,e.iconComponent,i).then(function(t){n.one(c).append(t)}),t.renderPix("t/expanded","core","").then(function(t){n.one(d).append(t)})}),a.append(n),this.toolbar.getAttribute("aria-activedescendant")||(n.setAttribute("tabindex","0"),this.toolbar.setAttribute("aria-activedescendant",n.generateID())),this._buttonHandlers.push(this.toolbar.delegate("click",this._showToolbarMenu,"."+r,this,e),this.toolbar.delegate("key",this._showToolbarMenuAndFocus,"40, 32, enter","."+r,this,e)),this.buttonNames.push(e.buttonName),this.buttons[e.buttonName]=n,this.buttonStates[e.buttonName]=this.ENABLED,n},_showToolbarMenu:function(t,e){var n,i,o;t.preventDefault(),this.isEnabled()&&((n=t.currentTarget.ancestor("button",!0)).hasAttribute(a)||(this.menus[e.buttonClass]||(e.overlayWidth||(e.overlayWidth="14"),e.innerOverlayWidth||(e.innerOverlayWidth=parseInt(e.overlayWidth,10)-2+"em"),e.overlayWidth=parseInt(e.overlayWidth,10)+"em",this.menus[e.buttonClass]=new u.M.editor_atto.Menu(e),this.menus[e.buttonClass].get("contentBox").delegate("click",this._chooseMenuItem,".atto_menuentry a",this,e)),u.Array.each(this.get("host").openMenus,function(t){t.set("focusAfterHide",null)}),(o=this.buttons[e.buttonName]).focus(),this.get("host")._setTabFocus(o),(i=this.menus[e.buttonClass]).set("focusAfterHide",o),i.show(),n.setAttribute("aria-expanded",!0),i.align(this.buttons[e.buttonName],[u.WidgetPositionAlign.TL,u.WidgetPositionAlign.BL]),this.get("host").openMenus=[i]))},_showToolbarMenuAndFocus:function(t,e){this._showToolbarMenu(t,e),this.menus[e.buttonClass].get("boundingBox").one("a").focus()},_chooseMenuItem:function(t,e,n){var i=t.target.ancestor("a",!0).getData("index"),o=this._normalizeCallback(e.items[i],e.globalItemConfig);(n=this.menus[e.buttonClass]).set("preventHideMenu",!0),o.callback(t,o._callback,o.callbackArgs),n.set("preventHideMenu",!1),n.set("focusAfterHide",this.get("host").editor),n.hide(t)},_normalizeCallback:function(n,t){return n._callbackNormalized||(t=t||{},n.inlineFormat=n.inlineFormat||t.inlineFormat,n._inlineCallback=n.callback||t.callback,n._callback=n.callback||t.callback,n.inlineFormat&&"function"==typeof n._inlineCallback&&(
n._callback=function(t,e){this.get("host").applyFormat(t,n._inlineCallback,this,e)}),n.callback=u.rbind(this._callbackWrapper,this,n._callback,n.callbackArgs),n._callbackNormalized=!0),n},_normalizeIcon:function(t){return t.iconurl||(t.iconComponent&&"moodle"!=t.iconComponent||(t.iconComponent="core"),t.iconurl=M.util.image_url(t.icon,t.iconComponent)),t},_callbackWrapper:function(t,e,n){var i,o;if(t.preventDefault(),this.isEnabled()&&(!(i=t.currentTarget.ancestor("button",!0))||!i.hasAttribute(a)))return YUI.Env.UA.android||this.get("host").isActive()||this.get("host").focus(),this.get("host").saveSelection(),i&&this.get("host")._setTabFocus(i),o=[t,n],this.get("host").restoreSelection(),e.apply(this,o)},_addKeyboardListener:function(n,t,e){var i,o,a,s="key",r=h;if(u.Lang.isArray(t))return u.Array.each(t,function(t){this._addKeyboardListener(n,t)},this),this;o="object"==typeof t?(t.eventtype&&(s=t.eventtype),t.container&&(r=t.container),i=t.keyCodes,n):(a=this._getDefaultMetaKey(),i=this._getKeyEvent()+t+"+"+a,"undefined"==typeof this._primaryKeyboardShortcut[e]&&(this._primaryKeyboardShortcut[e]=this._getDefaultMetaKeyDescription(t)),u.bind(function(t,e){this._eventUsesExactKeyModifiers(t,e)&&n.apply(this,[e])},this,[a])),this._buttonHandlers.push(this.editor.delegate(s,o,i,r,this))},_eventUsesExactKeyModifiers:function(t,e){var n,i=!0;return"key"===e.type&&(n=-1<u.Array.indexOf(t,"alt"),i=i&&(e.altKey&&n||!e.altKey&&!n),n=-1<u.Array.indexOf(t,"ctrl"),i=i&&(e.ctrlKey&&n||!e.ctrlKey&&!n),n=-1<u.Array.indexOf(t,"meta"),i=i&&(e.metaKey&&n||!e.metaKey&&!n),n=-1<u.Array.indexOf(t,"shift"),i=i&&(e.shiftKey&&n||!e.shiftKey&&!n))},isEnabled:function(){return u.Object.some(this.buttonStates,function(t){return t===this.ENABLED},this)},disableButtons:function(t){return this._setButtonState(!1,t)},enableButtons:function(t){return this._setButtonState(!0,t)},_setButtonState:function(e,t){var n="setAttribute";return e&&(n="removeAttribute"),t?this.buttons[t]&&(this.buttons[t][n](a,a),this.buttonStates[t]=e?this.ENABLED:this.DISABLED):u.Array.each(this.buttonNames,function(t){this.buttons[t][n](a,a),this.buttonStates[t]=e?this.ENABLED:this.DISABLED},this),this.get("host").checkTabFocus(),this},highlightButtons:function(t){return this._changeButtonHighlight(!0,t)},unHighlightButtons:function(t){return this._changeButtonHighlight(!1,t)},_changeButtonHighlight:function(e,t){var n="addClass";return e||(n="removeClass"),t?this.buttons[t]&&(this.buttons[t][n](o),this._buttonHighlightToggled(t,e)):u.Object.each(this.buttons,function(t){t[n](o),this._buttonHighlightToggled(t,e)},this),this},_buttonHighlightToggled:function(e,n){var i=this.buttons[e];i&&require(["editor_atto/events"],function(t){t.notifyButtonHighlightToggled(i.getDOMNode(),e,n)})},_getDefaultMetaKey:function(){return"macintosh"===u.UA.os?"meta":"ctrl"},_getDefaultMetaKeyDescription:function(t){return"macintosh"===u.UA.os?M.util.get_string("editor_command_keycode","editor_atto",String.fromCharCode(t).toLowerCase()):M.util.get_string("editor_control_keycode","editor_atto",String.fromCharCode(t).toLowerCase())},_getKeyEvent:function(){return"down:"}},u.Base.mix(u.M.editor_atto.EditorPlugin,[s]),r.ATTRS={},r.prototype={_dialogue:null,getDialogue:function(t){var e,n;return e=!1,(t=t||{}).focusAfterHide&&(e=t.focusAfterHide,delete t.focusAfterHide),this._dialogue||(n=u.merge({visible:!1,modal:!0,close:!0,draggable:!0},t),this._dialogue=new M.core.dialogue(n)),!1!==e&&(!0===e?this._dialogue.set("focusAfterHide",this.buttons[this.buttonNames[0]]):"string"==typeof e?this._dialogue.set("focusAfterHide",this.buttons[e]):this._dialogue.set("focusAfterHide",e)),this._dialogue}},u.Base.mix(u.M.editor_atto.EditorPlugin,[r])},"@VERSION@",{requires:["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]});