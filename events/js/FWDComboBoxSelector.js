/* FWDComboBoxSelector */
(function (){
var FWDComboBoxSelector = function(
			arrowN_img,
			arrowS_img,
			label1, 
			backgroundNormalColor,
			backgroundSelectedColor,
			textNormalColor,
			textSelectedColor,
			totalHeight
		){
		
		var self = this;
		var prototype = FWDComboBoxSelector.prototype;
		
		this.arrowN_sdo = null;
		this.arrowS_sdo = null;
		
		this.arrowN_img = arrowN_img;
		this.arrowS_img = arrowS_img;
		
		this.label1_str = label1;
		this.backgroundNormalColor_str = backgroundNormalColor;
		this.backgroundSelectedColor_str = backgroundSelectedColor;
		this.textNormalColor_str = textNormalColor;
		this.textSelectedColor_str = textSelectedColor;
		
		this.totalWidth = 400;
		this.totalHeight = totalHeight;
		this.arrowWidth = this.arrowN_img.width;
		this.arrowHeight = this.arrowN_img.height;
		
		this.bk_sdo = null;
		this.text_sdo = null;
		this.dumy_sdo = null;
		
		this.hasPointerEvent_bl = FWDUtils.hasPointerEvent;
		this.isMobile_bl = FWDUtils.isMobile;
		this.isDisabled_bl = false;
	
		//##########################################//
		/* initialize self */
		//##########################################//
		self.init = function(){
			self.setBackfaceVisibility();
			self.setButtonMode(true);
			self.setupMainContainers();
			self.setWidth(self.totalWidth);
			self.setHeight(self.totalHeight);
		};
	
		//##########################################//
		/* setup main containers */
		//##########################################//
		self.setupMainContainers = function(){
			
			self.bk_sdo = new FWDSimpleDisplayObject("div");
			self.bk_sdo.setBkColor(self.backgroundNormalColor_str);
			self.addChild(self.bk_sdo);
			
			self.text_sdo = new FWDSimpleDisplayObject("div");
			self.text_sdo.setBackfaceVisibility();
			self.text_sdo.setOverflow("visible");
			self.text_sdo.setDisplay("inline-block");
			self.text_sdo.getStyle().fontFamily = "Arial";
			self.text_sdo.getStyle().fontSize= "13px";
			self.text_sdo.getStyle().padding = "6px";
			self.text_sdo.getStyle().color = self.normalColor_str;
			self.text_sdo.getStyle().fontSmoothing = "antialiased";
			self.text_sdo.getStyle().webkitFontSmoothing = "antialiased";
			self.text_sdo.getStyle().textRendering = "optimizeLegibility";	
			self.text_sdo.setInnerHTML(self.label1_str);
			self.addChild(self.text_sdo);
			
			self.arrowN_sdo = new FWDSimpleDisplayObject("img");
			self.arrowN_sdo.setScreen(self.arrowN_img);
			self.arrowS_sdo = new FWDSimpleDisplayObject("img");
			self.arrowS_sdo.setScreen(self.arrowS_img);
			self.arrowS_sdo.setAlpha(0);
			self.addChild(self.arrowN_sdo);
			self.addChild(self.arrowS_sdo);
			
			self.dumy_sdo = new FWDSimpleDisplayObject("div");
			if(FWDUtils.isIE){
				self.dumy_sdo.setBkColor("#FF0000");
				self.dumy_sdo.setAlpha(0);
			};
			self.addChild(self.dumy_sdo);
			
			if(self.isMobile_bl){
				if(self.hasPointerEvent_bl){
					self.screen.addEventListener("MSPointerOver", self.onMouseOver);
					self.screen.addEventListener("MSPointerOut", self.onMouseOut);
					self.screen.addEventListener("MSPointerDown", self.onMouseDown);
					self.screen.addEventListener("MSPointerUp", self.onClick);
				}else{
					self.screen.addEventListener("touchstart", self.onMouseDown);
				}
			}else if(self.screen.addEventListener){
				self.screen.addEventListener("mouseover", self.onMouseOver);
				self.screen.addEventListener("mouseout", self.onMouseOut);
				self.screen.addEventListener("mousedown", self.onMouseDown);
				self.screen.addEventListener("click", self.onClick);
			}else if(self.screen.attachEvent){
				self.screen.attachEvent("onmouseover", self.onMouseOver);
				self.screen.attachEvent("onmouseout", self.onMouseOut);
				self.screen.attachEvent("onmousedown", self.onMouseDown);
				self.screen.attachEvent("onclick", self.onClick);
			}
		};
		
		self.onMouseOver = function(e){
			if(self.isDisabled_bl) return;
			if(!e.pointerType || e.pointerType == e.MSPOINTER_TYPE_MOUSE){
				TweenMax.killTweensOf(self.text_sdo);
				self.setSelectedState(true);
				self.dispatchEvent(FWDComboBoxSelector.MOUSE_OVER);
			}
		};
			
		self.onMouseOut = function(e){
			if(self.isDisabled_bl) return;
			if(!e.pointerType || e.pointerType == e.MSPOINTER_TYPE_MOUSE){
				TweenMax.killTweensOf(self.text_sdo);
				self.setNormalState(true);
				self.dispatchEvent(FWDComboBoxSelector.MOUSE_OUT);
			}
		};
		
		self.onClick = function(e){
			if(self.isDeveleper_bl){
				window.open("http://www.webdesign-flash.ro", "_blank");
				return;
			}
			if(self.isDisabled_bl) return;
			if(e.preventDefault) e.preventDefault();
			self.dispatchEvent(FWDComboBoxSelector.CLICK);
		};
		
		self.onMouseDown = function(e){
			if(self.isDisabled_bl) return;
			if(e.preventDefault) e.preventDefault();
			self.dispatchEvent(FWDComboBoxSelector.MOUSE_DOWN, {e:e});
		};
		
		//###########################################//
		/* set selected / normal state */
		//###########################################//
		this.setSelectedState = function(animate){
			if(animate){
				TweenMax.to(self.bk_sdo.screen, .6, {css:{backgroundColor:self.backgroundSelectedColor_str}, ease:Quart.easeOut});
				TweenMax.to(self.text_sdo.screen, .6, {css:{color:self.textSelectedColor_str}, ease:Quart.easeOut});
				TweenMax.to(self.arrowS_sdo, .6, {alpha:1, ease:Quart.easeOut});
			}else{
				self.bk_sdo.setBkColor(self.backgroundSelectedColor_str);
				self.text_sdo.getStyle().color = self.textSelectedColor_str;
				self.arrowS_sdo.alpha = 1;
			}
		};
		
		this.setNormalState = function(animate){
			if(animate){
				TweenMax.to(self.bk_sdo.screen, .6, {css:{backgroundColor:self.backgroundNormalColor_str}, ease:Quart.easeOut});
				TweenMax.to(self.text_sdo.screen, .6, {css:{color:self.textNormalColor_str}, ease:Quart.easeOut});
				TweenMax.to(self.arrowS_sdo, .6, {alpha:0, ease:Quart.easeOut});
			}else{
				self.bk_sdo.setBkColor(self.backgroundNormalColor_str);
				self.text_sdo.getStyle().color = self.textNormalColor_str;
				self.arrowS_sdo.alpha = 0;
			}
		};

		//##########################################//
		/* center text */
		//##########################################//
		self.centerText = function(){
			self.dumy_sdo.setWidth(self.totalWidth);
			self.dumy_sdo.setHeight(self.totalHeight);
			self.bk_sdo.setWidth(self.totalWidth);
			self.bk_sdo.setHeight(self.totalHeight);
			
			if(FWDUtils.isIEAndLessThen9){
				self.text_sdo.setY(Math.round((self.totalHeight - self.text_sdo.getHeight())/2) - 1);
			}else{
				self.text_sdo.setY(Math.round((self.totalHeight - self.text_sdo.getHeight())/2));
			}
			self.text_sdo.setHeight(self.totalHeight + 2);
			
			self.arrowN_sdo.setX(self.totalWidth - self.arrowWidth - 4);
			self.arrowN_sdo.setY(Math.round((self.totalHeight - self.arrowHeight)/2));
			self.arrowS_sdo.setX(self.totalWidth - self.arrowWidth - 4);
			self.arrowS_sdo.setY(Math.round((self.totalHeight - self.arrowHeight)/2));
		};
		
		//###############################//
		/* get max text width */
		//###############################//
		self.getMaxTextWidth = function(){
			return self.text_sdo.getWidth();
		};
		
		//##############################//
		/* disable / enable */
		//#############################//
		this.disable = function(){
			self.isDisabled_bl = true;
			self.setSelectedState(true);
			if(FWDUtils.hasTransform2d){
				TweenMax.to(self.arrowN_sdo.screen, .6, {css:{rotation:180}, ease:Quart.easeOut});
				TweenMax.to(self.arrowS_sdo.screen, .6, {css:{rotation:180}, ease:Quart.easeOut});
			}
		};
		
		this.enable = function(){
			self.isDisabled_bl = false;
			self.setNormalState(true);
			if(FWDUtils.hasTransform2d){
				TweenMax.to(self.arrowN_sdo.screen, .6, {css:{rotation:0}, ease:Quart.easeOut});
				TweenMax.to(self.arrowS_sdo.screen, .6, {css:{rotation:0}, ease:Quart.easeOut});
			}
		};
		
		//##############################//
		/* destroy */
		//##############################//
		self.destroy = function(){
			
			if(self.isMobile_bl){
				self.screen.removeEventListener("touchstart", self.onMouseDown);
			}else if(self.screen.removeEventListener){
				self.screen.removeEventListener("mouseover", self.onMouseOver);
				self.screen.removeEventListener("mouseout", self.onMouseOut);
				self.screen.removeEventListener("mousedown", self.onMouseDown);
				self.screen.removeEventListener("click", self.onClick);
			}else if(self.screen.detachEvent){
				self.screen.detachEvent("onmouseover", self.onMouseOver);
				self.screen.detachEvent("onmouseout", self.onMouseOut);
				self.screen.detachEvent("onmousedown", self.onMouseDown);
				self.screen.detachEvent("onclick", self.onClick);
			}
			
			
			TweenMax.killTweensOf(self.text_sdo);
			self.text_sdo.destroy();
			
			self.dumy_sdo.destroy();
			
			self.text_sdo = null;
			self.dumy_sdo = null;
			
			self.label1_str = null;
			self.normalColor_str = null;
			self.textSelectedColor_str = null;
			self.disabledColor_str = null;
			
			label1 = null;
			normalColor = null;
			selectedColor = null;
			disabledColor = null;
			
			self.setInnerHTML("");
			prototype.destroy();
			self = null;
			prototype = null;
			FWDComboBoxSelector.prototype = null;
		};
	
		self.init();
	};
	
	/* set prototype */
	FWDComboBoxSelector.setPrototype = function(){
		FWDComboBoxSelector.prototype = new FWDDisplayObject("div");
	};
	
	FWDComboBoxSelector.FIRST_BUTTON_CLICK = "onFirstClick";
	FWDComboBoxSelector.SECOND_BUTTON_CLICK = "secondButtonOnClick";
	FWDComboBoxSelector.MOUSE_OVER = "onMouseOver";
	FWDComboBoxSelector.MOUSE_OUT = "onMouseOut";
	FWDComboBoxSelector.MOUSE_DOWN = "onMouseDown";
	FWDComboBoxSelector.CLICK = "onClick";
	
	FWDComboBoxSelector.prototype = null;
	window.FWDComboBoxSelector = FWDComboBoxSelector;
}(window));