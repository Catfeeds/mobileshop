/*kad iOS v2.0.10 js Interface*/
window.kadiosjs = {
    __callbacks: {},
    invokeCallback: function(cbID, removeAfterExecute) {
        var args = Array.prototype.slice.call(arguments);
        args.shift();
        args.shift();
        for (var i = 0,
        l = args.length; i < l; i++) {
            args[i] = decodeURIComponent(args[i]);
        }
        var cb = kadiosjs.__callbacks[cbID];
        if (removeAfterExecute) {
            kadiosjs.__callbacks[cbID] = undefined;
        }
        return cb.apply(null, args);
    },
    call: function(obj, functionName, args) {
        var formattedArgs = [];
        for (var i = 0,
        l = args.length; i < l; i++) {
            if (typeof args[i] == "function") {
                formattedArgs.push("f");
                var cbID = "__cb" + ( + new Date);
                kadiosjs.__callbacks[cbID] = args[i];
                formattedArgs.push(cbID);
            } else {
                formattedArgs.push("s");
                formattedArgs.push(encodeURIComponent(args[i]));
            }
        }
        var argStr = (formattedArgs.length > 0 ? ":" + encodeURIComponent(formattedArgs.join(":")) : "");
        var iframe = document.createElement("IFRAME");
        iframe.setAttribute("src", "kadios-js:" + obj + ":" + encodeURIComponent(functionName) + argStr);
        document.documentElement.appendChild(iframe);
        iframe.parentNode.removeChild(iframe);
        iframe = null;
        var ret = kadiosjs.retValue;
        kadiosjs.retValue = undefined;
        if (ret) {
            return decodeURIComponent(ret);
        }
    },
    inject: function(obj, methods) {
        window[obj] = {};
        var jsObj = window[obj];
        for (var i = 0,
        l = methods.length; i < l; i++) { (function() {
                var method = methods[i];
                var jsMethod = method.replace(new RegExp(":", "g"), "");
                jsObj[jsMethod] = function() {
                    return kadiosjs.call(obj, method, Array.prototype.slice.call(arguments));
                };
            })();
        }
    }
};
kadiosjs.inject("kadios", ["isLogin", "getUserId", "getUniqueId", "getIDFA", "getChannelName", "viewControl", "startShoppingCar", "startPromotion", "goSeckill", "getCoupon:", "showToast:", "goLogin", "goRegister", "openUrl:", "goNearlyExpress", "goUserSignIn", "goInvite", "goFootprint", "goHome", "getGoods:", "goGoodsDetail:", "getAppVersion", "runner", "goAppStore", "toast:", "startSign", "goShareSin:n:g:l:e:", "getIDFV", "invokeAny:", "getJSInterfaceVersionNo", "getAppVersionNo", "getDeviceType", "getSystemVersionNo", "getSystemVersion","getAppInnerVersionNo", "call:", "addGoodsToShopping:Car:", "goSearch:", "goGoodsLi:st:", "addPackageToShopping:Car:", "toastCenter:", "getGtClientId", "getWidth", "getHeight", "goHistory", "goHistoryPage", "closeGuide", "downloadAPK", "startWebView:", "startShareInviteCode", "goSha:r:e:s:", "g:o:S:h:a:r:e:s:", "GoShareSin:n:g:l:e:", "kadShareWith:T:y:p:e:", "exitApp", "startHealth", "startBMI", "startBloodPressure", "startRemind", "startAddRemind:", "startCapture", "startFavorite", "startChatCenter", "startChatShouqian", "startChatShouhou", "startChatWithGroupId:AndSource:", "startPersonalCustom", "startShits", "startQuickSearch", "popView:", "goRegAndBindKadAccoun:t:", "goBindPhoneNumbe:r:", "callback:","goNewDema:n:d:","goToZiceyongyao","addRemi:n:d:","cancelRemin:d:","getRemindSta:t:e:","goCategory","goChangeCoupon","goAboutUs","goShark","goNewAddress","goAddressLis:t:","goCommonPa:y:","gotoMessageBox","goExpress:","jsCallBac:k:"]);
/*Add a handle for kad*/
if (typeof(kad) == "undefined") {
    var kad = kadios;
} else {
    var old = kad;
    var versionNo = 112;
    var kad = {
        getAppVersionNo: function() {
            return old.getAppVersionNo()
        },
        getAppVersionName: function() {
            return old.getAppVersionName()
        },
        setClipboardContent: function(a) {
            old.setClipboardContent(a)
        },
        addGoodsToShoppingCar: function(a, b) {
            if (b) {
                if (typeof(a) == "number") {
                    if (old.getAppVersionNo() > versionNo) {
                        var temp = a.toString();
                        old.addGoodsToShoppingCar(temp, b)
                    } else {
                        old.addGoodsToShoppingCar(a, b)
                    }
                } else {
                    if (typeof(a) == "string") {
                        if (old.getAppVersionNo() <= versionNo) {
                            var temp = parseInt(a);
                            old.addGoodsToShoppingCar(temp, b)
                        } else {
                            old.addGoodsToShoppingCar(a, b)
                        }
                    }
                }
            } else {
                if (typeof(a) == "number") {
                    if (old.getAppVersionNo() > versionNo) {
                        var temp = a.toString();
                        old.addGoodsToShoppingCar(temp)
                    } else {
                        old.addGoodsToShoppingCar(a)
                    }
                } else {
                    if (typeof(a) == "string") {
                        if (old.getAppVersionNo() <= versionNo) {
                            var temp = parseInt(a);
                            old.addGoodsToShoppingCar(temp)
                        } else {
                            old.addGoodsToShoppingCar(a)
                        }
                    }
                }
            }
        },
        addPackageToShoppingCar: function(a, b) {
            if (b) {
                if (typeof(a) == "number") {
                    if (old.getAppVersionNo() > versionNo) {
                        var temp = a.toString();
                        old.addPackageToShoppingCar(temp, b)
                    } else {
                        old.addPackageToShoppingCar(a, b)
                    }
                } else {
                    if (typeof(a) == "string") {
                        if (old.getAppVersionNo() <= versionNo) {
                            var temp = parseInt(a);
                            old.addPackageToShoppingCar(temp, b)
                        } else {
                            old.addPackageToShoppingCar(a, b)
                        }
                    }
                }
            } else {
                if (typeof(a) == "number") {
                    if (old.getAppVersionNo() > versionNo) {
                        var temp = a.toString();
                        old.addPackageToShoppingCar(temp)
                    } else {
                        old.addPackageToShoppingCar(a)
                    }
                } else {
                    if (typeof(a) == "string") {
                        if (old.getAppVersionNo() <= versionNo) {
                            var temp = parseInt(a);
                            old.addPackageToShoppingCar(temp)
                        } else {
                            old.addPackageToShoppingCar(a)
                        }
                    }
                }
            }
        },
        call: function(a) {
            old.call(a)
        },
        callback: function(a) {
            old.callback(a)
        },
        finish: function() {
            old.finish()
        },
        getChannelName: function() {
            return old.getChannelName()
        },
        getCoupon: function(id) {
            if (typeof(id) == "number") {
                if (old.getAppVersionNo() > versionNo) {
                    var temp = id.toString();
                    old.getCoupon(temp)
                } else {
                    old.getCoupon(id)
                }
            } else {
                if (typeof(id) == "string") {
                    if (old.getAppVersionNo() <= versionNo) {
                        var temp = parseInt(id);
                        old.getCoupon(temp)
                    } else {
                        old.getCoupon(id)
                    }
                }
            }
        },
        getDeviceType: function() {
            return old.getDeviceType()
        },
        getGoods: function(id) {
            if (typeof(id) == "number") {
                if (old.getAppVersionNo() > versionNo) {
                    var temp = id.toString();
                    old.getGoods(temp)
                } else {
                    old.getGoods(id)
                }
            } else {
                if (typeof(id) == "string") {
                    if (old.getAppVersionNo() <= versionNo) {
                        var temp = parseInt(id);
                        old.getGoods(temp)
                    } else {
                        old.getGoods(id)
                    }
                }
            }
        },
        getGtClientId: function() {
            return old.getGtClientId()
        },
        getHeight: function() {
            return old.getHeight()
        },
        getJSInterfaceVersionNo: function() {
            return old.getJSInterfaceVersionNo()
        },
        getSystemVersionNo: function() {
            return old.getSystemVersionNo()
        },
        getUniqueId: function() {
            return old.getUniqueId()
        },
        getUserId: function() {
            return old.getUserId()
        },
        getWidth: function() {
            return old.getWidth()
        },
        goDemand: function(a, b, c, d, e, f, g) {
            old.goDemand(a, b, c, d, e, f, g)
        },
        goDex: function(a) {
            old.goDex(a)
        },
        goFootprint: function() {
            old.goFootprint()
        },
        goGoodsDetail: function(id) {
            if (typeof(id) == "number") {
                if (old.getAppVersionNo() > versionNo) {
                    var temp = id.toString();
                    old.goGoodsDetail(temp)
                } else {
                    old.goGoodsDetail(id)
                }
            } else {
                if (typeof(id) == "string") {
                    if (old.getAppVersionNo() <= versionNo) {
                        var temp = parseInt(id);
                        old.goGoodsDetail(temp)
                    } else {
                        old.goGoodsDetail(id)
                    }
                }
            }
        },
        goGoodsList: function(a, b) {
            if (b) {
                if (typeof(a) == "number") {
                    if (old.getAppVersionNo() > versionNo) {
                        var temp = a.toString();
                        old.goGoodsList(temp, b)
                    } else {
                        old.goGoodsList(a, b)
                    }
                } else {
                    if (typeof(a) == "string") {
                        if (old.getAppVersionNo() <= versionNo) {
                            var temp = parseInt(a);
                            old.goGoodsList(temp, b)
                        } else {
                            old.goGoodsList(a, b)
                        }
                    }
                }
            } else {
                if (typeof(a) == "number") {
                    if (old.getAppVersionNo() > versionNo) {
                        var temp = a.toString();
                        old.goGoodsList(temp)
                    } else {
                        old.goGoodsList(a)
                    }
                } else {
                    if (typeof(a) == "string") {
                        if (old.getAppVersionNo() <= versionNo) {
                            var temp = parseInt(a);
                            old.goGoodsList(temp)
                        } else {
                            old.goGoodsList(a)
                        }
                    }
                }
            }
        },
        goHistory: function() {
            old.goHistory()
        },
        goHome: function() {
            old.goHome()
        },
        goLogin: function() {
            old.goLogin()
        },
        goRegister: function() {
            old.goRegister()
        },
        goSearch: function(a) {
            old.goSearch(a)
        },
        goSeckill: function() {
            old.goSeckill()
        },
        goShares: function(a, b, c, d, e, f) {
            if (e && f) {
                old.goShares(a, b, c, d, e, f)
            } else {
                old.goShares(a, b, c, d)
            }
        },
        goSingleShare: function(a, b, c, d, e, f, g) {
            if (f && g) {
                old.goSingleShare(a, b, c, d, e, f, g)
            } else {
                old.goSingleShare(a, b, c, d, e)
            }
        },
        isLogin: function() {
            return old.isLogin()
        },
        onPayResult: function(a, b) {
            if (typeof(a) == "number") {
                if (old.getAppVersionNo() > versionNo) {
                    var temp = a.toString();
                    old.onPayResult(temp, b)
                } else {
                    old.onPayResult(a, b)
                }
            } else {
                if (typeof(a) == "string") {
                    if (old.getAppVersionNo() <= versionNo) {
                        var temp = parseInt(a);
                        old.onPayResult(temp, b)
                    } else {
                        old.onPayResult(a, b)
                    }
                }
            }
        },
        onPaySuccess: function() {
            old.onPaySuccess()
        },
        showToast: function(a) {
            old.showToast(a)
        },
        startAddRemind: function(a) {
            if (a) {
                old.startAddRemind(a)
            } else {
                old.startAddRemind()
            }
        },
        startBloodPressure: function() {
            old.startBloodPressure()
        },
        startBMI: function() {
            old.startBMI()
        },
        startCapture: function() {
            old.startCapture()
        },
        startChatCenter: function() {
            old.startChatCenter()
        },
        startChatShouhou: function() {
            old.startChatShouhou()
        },
        startChatShouqian: function() {
            old.startChatShouqian()
        },
        startFavorite: function() {
            old.startFavorite()
        },
        startHealth: function() {
            old.startHealth()
        },
        startLoadingCustomPlugin: function(a) {
            old.startLoadingCustomPlugin(a)
        },
        startMyCoupon: function() {
            old.startMyCoupon()
        },
        startPersonalCustom: function() {
            old.startPersonalCustom()
        },
        startPromotion: function() {
            old.startPromotion()
        },
        startQuickSearch: function() {
            old.startQuickSearch()
        },
        startRemind: function() {
            old.startRemind()
        },
        startShareInviteCode: function() {
            old.startShareInviteCode()
        },
        startShits: function() {
            old.startShits()
        },
        startShoppingCar: function() {
            old.startShoppingCar()
        },
        startSign: function() {
            old.startSign()
        },
        startWebView: function(a) {
            old.startWebView(a)
        },
        toast: function(a) {
            old.toast(a)
        },
        toastCenter: function(a) {
            old.toastCenter(a)
        },
        addRemind: function(a, b, c) {
            old.addRemind(a, b, c)
        },
        cancelRemind: function(a, b) {
            old.cancelRemind(a, b)
        },
        getRemindState: function(a, b, c) {
            return old.getRemindState(a, b, c)
        },
		goBindPhoneNumber:function(a,b){
			return old.goBindPhoneNumber(a,b)
		},
		goRegAndBindKadAccount:function(a,b){
			return old.goRegAndBindKadAccount(a,b)
		},
		goNewDemand:function(a,b,c){
			old.goNewDemand(a,b,c)
		},
		goToZiceyongyao:function(){
			old.goToZiceyongyao()
		},
		goMyIntegral:function(){
			old.goMyIntegral()
		},
		goCategory:function(){
			old.goCategory()
		},
		goChangeCoupon:function(){
			old.goChangeCoupon()
		},
		goAboutUs:function(){
			old.goAboutUs()
		},
		goShark:function(){
			old.goShark()
		},
		goCommonPay:function(a,b){
			old.goCommonPay(a,b)
		},
		goAddressList:function(a,b){
			old.goAddressList(a,b)
		},
		goNewAddress:function(){
			old.goNewAddress()
		}
    };
    var listener = kad;
};
/*Old version*/
if (typeof(listener) == "undefined") {
    var listener = {
        iosCall: function(mode, p0, p1, p2, p3, p4) {
            var iosParams = '?mode=' + mode;
            if (p0) {
                iosParams += "&p0=" + encodeURIComponent(p0);
            }
            if (p1) {
                iosParams += "&p1=" + encodeURIComponent(p1);
            }
            if (p2) {
                iosParams += "&p2=" + encodeURIComponent(p2);
            }
            if (p3) {
                iosParams += "&p3=" + encodeURIComponent(p3);
            }
            if (p4) {
                iosParams += "&p4=" + encodeURIComponent(p4);
            }
            var ifrUrl = "kad://webview/" + iosParams;
            var iframe = document.createElement("IFRAME");
            iframe.setAttribute("src", ifrUrl);
            document.documentElement.appendChild(iframe);
            iframe.parentNode.removeChild(iframe);
            iframe = null;
        },
        inject: function(method) {
            listener[method] = function(p0, p1, p2, p3, p4) {
                listener.iosCall(method, p0, p1, p2, p3, p4);
            };
        }
    };
    var kadListenerInject = ["goGoodsDetail", "goGoodsList", "addGoodsToShoppingCar", "addPackageToShoppingCar", "goSearch", "downloadAPK", "startShoppingCar", "startPromotion", "goSeckill", "getCoupon", "showToast", "startChannel", "call", "getGoods", "goLogin", "goRegister", "goShares", "goShareSingle"];
    for (var i = 0; i < kadListenerInject.length; i++) {
        listener.inject(kadListenerInject[i]);
    }
};
//普康宝app的异常处理。。。
if (window.pukangbao) {
    kad = undefined;
}