;jQuery(window).on('elementor:init',function(){'use strict';var a=jQuery('.eicon-close');a.on('click',function(){jQuery('.widgetarea_iframe_modal').css('display','none')});var e=elementor.modules.controls.BaseData,n=e.extend({ui:function t(){var t=e.prototype.ui.apply(this,arguments);t.inputs='[type="text"]';return t},events:function(){return _.extend(e.prototype.events.apply(this,arguments),{'change @ui.inputs':'onBaseInputChange'})},onBaseInputChange:function(e){clearTimeout(this.correctionTimeout);var t=e.currentTarget,n=this.getInputValue(t),a=this.validators.slice(0),i=this.elementSettingsModel.validators[this.model.get('name')];this.updateElementModel(n,t)},onRender:function(){e.prototype.onRender.apply(this,arguments);var t=this;setInterval(function(){var i=$('body').attr('data-elementskit-widgetarea-load'),r=$('body').attr('data-elementskit-widgetarea-key');if(i=='true'){var a=new Date().getTime(),n,e=r.split('***');e=e[0];n=e+'***'+a;$('body').attr('data-elementskit-widgetarea-load','false');t.setValue(n)}},2000)}},{});elementor.addControlView('widgetarea',n)});