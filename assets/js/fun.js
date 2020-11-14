var Liferay = {
    Browser: {
        acceptsGzip: function() {
            return true
        },
        getMajorVersion: function() {
            return 86
        },
        getRevision: function() {
            return "537.36"
        },
        getVersion: function() {
            return "86.0.4240.198"
        },
        isAir: function() {
            return false
        },
        isChrome: function() {
            return true
        },
        isFirefox: function() {
            return false
        },
        isGecko: function() {
            return true
        },
        isIe: function() {
            return false
        },
        isIphone: function() {
            return false
        },
        isLinux: function() {
            return false
        },
        isMac: function() {
            return false
        },
        isMobile: function() {
            return false
        },
        isMozilla: function() {
            return false
        },
        isOpera: function() {
            return false
        },
        isRtf: function() {
            return true
        },
        isSafari: function() {
            return true
        },
        isSun: function() {
            return false
        },
        isWap: function() {
            return false
        },
        isWapXhtml: function() {
            return false
        },
        isWebKit: function() {
            return true
        },
        isWindows: function() {
            return true
        },
        isWml: function() {
            return false
        }
    },
    Data: {
        isCustomizationView: function() {
            return false
        },
        notices: [null]
    },
    ThemeDisplay: {
        getCompanyId: function() {
            return "10154"
        },
        getCompanyGroupId: function() {
            return "10192"
        },
        getUserId: function() {
            return "10158"
        },
        getDoAsUserIdEncoded: function() {
            return ""
        },
        getPlid: function() {
            return "13560"
        },
        getLayoutId: function() {
            return "19"
        },
        getLayoutURL: function() {
            return "https://kerala.gov.in/login"
        },
        isPrivateLayout: function() {
            return "false"
        },
        getParentLayoutId: function() {
            return "0"
        },
        getScopeGroupId: function() {
            return "10180"
        },
        getScopeGroupIdOrLiveGroupId: function() {
            return "10180"
        },
        getParentGroupId: function() {
            return "10180"
        },
        isImpersonated: function() {
            return false
        },
        isSignedIn: function() {
            return false
        },
        getDefaultLanguageId: function() {
            return "en_US"
        },
        getLanguageId: function() {
            return "en_US"
        },
        isAddSessionIdToURL: function() {
            return false
        },
        isFreeformLayout: function() {
            return false
        },
        isStateExclusive: function() {
            return false
        },
        isStateMaximized: function() {
            return true
        },
        isStatePopUp: function() {
            return false
        },
        getPathContext: function() {
            return ""
        },
        getPathImage: function() {
            return "/image"
        },
        getPathJavaScript: function() {
            return "/html/js"
        },
        getPathMain: function() {
            return "/c"
        },
        getPathThemeImages: function() {
            return "/KeralaLatest-theme/images"
        },
        getPathThemeRoot: function() {
            return "/KeralaLatest-theme/"
        },
        getURLHome: function() {
            return "https://kerala.gov.in/web/guest/home"
        },
        getSessionId: function() {
            return "69417B9EEC83348E5A4F7ACE3BA18947.node1"
        },
        getPortletSetupShowBordersDefault: function() {
            return true
        }
    },
    PropsValues: {
        NTLM_AUTH_ENABLED: false
    }
}

;
var themeDisplay = Liferay.ThemeDisplay;
Liferay.AUI = {
    getBaseURL: function() {
        return "https://kerala.gov.in/html/js/aui/"
    },
    getCombine: function() {
        return true
    },
    getComboPath: function() {
        return "/combo/?browserId=other&minifierType=&languageId=en_US&b=6100&t=1597427264000&p=/html/js&"
    },
    getFilter: function() {
        return {
            replaceStr: function(c,
                b,
                a) {
                return b + "m=" + (c.split("/html/js")[1] || "")
            },
            searchExp: "(\\?|&)/([^&]+)"
        }
    },
    getJavaScriptRootPath: function() {
        return "/html/js"
    },
    getLangPath: function() {
        return "aui_lang.jsp?browserId=other&themeId=KeralaLatest_WAR_KeralaLatesttheme&colorSchemeId=01&minifierType=js&languageId=en_US&b=6100&t=1597427264000"
    },
    getRootPath: function() {
        return "/html/js/aui/"
    }
}

;
window.YUI_config = {
    base: Liferay.AUI.getBaseURL(),
    comboBase: Liferay.AUI.getComboPath(),
    fetchCSS: true,
    filter: Liferay.AUI.getFilter(),
    root: Liferay.AUI.getRootPath(),
    useBrowserConsole: false
}

;
Liferay.currentURL = "\x2fweb\x2fguest\x2flogin\x3fp_p_id\x3d58\x26p_p_lifecycle\x3d0\x26p_p_state\x3dmaximized\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-1\x26p_p_col_count\x3d1\x26saveLastPath\x3d0\x26_58_struts_action\x3d\x252Flogin\x252Fcreate_account";
Liferay.currentURLEncoded = "%2Fweb%2Fguest%2Flogin%3Fp_p_id%3D58%26p_p_lifecycle%3D0%26p_p_state%3Dmaximized%26p_p_mode%3Dview%26p_p_col_id%3Dcolumn-1%26p_p_col_count%3D1%26saveLastPath%3D0%26_58_struts_action%3D%252Flogin%252Fcreate_account";

/*]]>*/