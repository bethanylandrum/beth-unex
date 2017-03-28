/*  SalesCart functions 
*  Desc: Misc. functions common to SalesCart
* Version: 1.0
* Author: SalesCart
* Author URI: http://www.SalesCart.com
* Copyright (C) 2015 by ComCity LLC and SalesCart.
* Distribution License: GNU General Public License v2
* Requires:  Reference: https://github.com/davidjbradshaw/iframe-resizer under the MIT License
* All Other Rights Reserved
*/


			//MDN PolyFil for IE8 (This is not needed if you use the jQuery version)
			if (!Array.prototype.forEach){
				Array.prototype.forEach = function(fun /*, thisArg */){
				"use strict";
				if (this === void 0 || this === null || typeof fun !== "function") throw new TypeError();
				
				var
				t = Object(this),
				len = t.length >>> 0,
				thisArg = arguments.length >= 2 ? arguments[1] : void 0;

				for (var i = 0; i < len; i++)
				if (i in t)
					fun.call(thisArg, t[i], i, t);
				};
			}


			iFrameResize({
				log                     : true,          // Enable console logging
				enablePublicMethods     : true,          // Enable methods within iframe hosted page
				checkOrigin		: false          // Disable CheckOrigin
			});

