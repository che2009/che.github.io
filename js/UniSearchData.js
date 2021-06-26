var UniSearch = {
    langCode: "",
    searchUrl: "",
    data: {},
    defaults: {},
    Theme: "google2011"
};
UniSearch.defaults.preferredList = {};
UniSearch.defaults.preferredList["zh-cn"] = {
		//以下是选中标题后下面切换到default
    prefer: 0,
    
   web: "360",
    //web: "baidu",
    image: "baidu",
    news: "baidu",
    music: "baidu",
    video: "iqiyi",
    bt: "gougou",
    shopping: "taobao",
    answer: "baidu",
    map: "baidu",
    soft: "pconline",
    blog: "google",
    dict: "iciba"
};
UniSearch.defaults.preferredConList = {};
UniSearch.defaults.preferredConList["zh-cn"] = [{
	//点开首选出现下面选项
    c: "web",
    n: "baidu"
},
{
    c: "web",
    n: "live"
},
{
    c: "web",
    n: "google"
},
{
    c: "web",
    n: "soso"
},
{
    c: "music",
    n: "baidu"
},
{
    c: "bt",
    n: "gougou"
},
{
    c: "shopping",
    n: "taobao"
}];
UniSearch.defaults.firstShow = {};
UniSearch.defaults.firstShow["zh-cn"] = {
    title: "prefer",
    item: 0
};
UniSearch.defaults.order = {};
/*
UniSearch.defaults.order["zh-cn"] = ["prefer", "web", "music", "image", "video", "shopping", "dict", "bt", "answer", "news", "map", "soft", "blog", "more"];
*/
// UniSearch.defaults.order["zh-cn"] = ["prefer", "music", "image", "video","news", "dict","answer","shopping"];
UniSearch.defaults.order["zh-cn"] = ["prefer", "music", "image", "video"];
UniSearch.data["zh-cn"] = {};
UniSearch.data["zh-cn"]["more"] = {};
UniSearch.data["zh-cn"]["set"] = {
    title: "[语言选择]"
};
UniSearch.data["zh-cn"]["prefer"] = {
    
		title: "网页搜索",
    items: [{
    
        c: "web",
        n: "baidu"
    },

    {
        c: "web",
        n: "google"
    },
    {
        c: "web",
        n: "live"
    },
    {
        c: "web",
        n: "youdao"
    },
    {
        c: "web",
        n: "chinaso"
    },
    {
        c: "web",
        n: "sogou"
    },
    {
        c: "web",
        n: "360"
    }
    
    // {
    //     c: "web",
    //     n: "google"
    // }
    ]
};


UniSearch.data["zh-cn"]["web"] = {
    title: "网页搜索",
    items: {
        baidu: {
            title:"Baidu 百度",
            url: "http://www.baidu.com/s?&ch=2&ie=utf-8&wd="
        },
        google: {
            title:"google 镜像",
            url: "https://search.library.edu.eu.org/search?q="
        },
        360: {
            title: "360综合搜索",
            url: "http://www.so.com/s?ie=utf-8&shb=1&src=360sou_newhome&q="
        },
        // youdao: {
        //     title: "Youdao 有道",
        //     url: "http://www.youdao.com/search?ue=gbk&q={keyword:gb2312}"
        // },
        sogou: {
            title: "Sogou 搜狗",
            url: "http://www.sogou.com/web?query="
        },
        live: {
            title: "Bing 必应",
            url: "http://cn.bing.com/search?form=QBLH&filt=all&q="
        },
        chinaso: {
            title: "chinaso 中搜",
            url: "http://www.chinaso.com/newssearch/all/allResults?q="
        }
   
    }
};


UniSearch.data["zh-cn"]["image"] = {
    title: "图片搜索",
    items: {
    
       /* google: {
            title: "Google",
            subtitle: "图片",
            url: "http://www.google.com/search?hl=zh-CN&um=1&ie=UTF-8&tbm=isch&source=og&sa=N&tab=wi&q="
        },*/
        
        baidu: {
            title: "百度",
            subtitle: "图片",
            url: "http://image.baidu.com/i?ct=201326592&cl=2&lm=-1&tn=baiduimage&istype=2&fm=index&pv=&z=0&s=0&word="
        },
        sogou: {
            title: "搜狗",
            subtitle: "图片",
            url: "http://pic.sogou.com/pics?query={keyword:escape}"
        },
        live: {
            title: "必应",
            subtitle: "图片",
            url: "http://cn.bing.com/images/search?FORM=BIFD&q="
        },
        // youdao: {
        //     title: "谷歌",
        //     subtitle: "图片",
        //     url: "https://search.library.edu.eu.org/search?q={keyword:gb2312}&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiU4qXOqO7vAhXMGaYKHblgCscQ_AUoAXoECAIQAw&biw=1280&bih=666"
        // },
        zhongsou: {
            title: "中搜",
            subtitle: "图片",
            url: "http://www.chinaso.com/newssearch/image?q="
        }
    }
};


UniSearch.data["zh-cn"]["news"] = {
    title: "新闻搜索",
    items: {
        baidu: {
            title: "百度",
            subtitle: "新闻",
            url: "http://news.baidu.com/ns?word={keyword:gb2312}"
        },
        sogou: {
            title: "搜狗",
            subtitle: "新闻",
            url: "http://news.sogou.com/news?query={keyword:gb2312}"
        },
        youdao: {
            title: "有道",
            subtitle: "新闻",
            url: "http://news.youdao.com/search?q={keyword}&keyfrom=web.top"
        },
        ifeng: {
            title: "凤凰网",
            subtitle: "新闻",
            url: "http://search.ifeng.com/sofeng/search.action?q="
        },
        sinanews: {
            title: "新浪",
            subtitle: "新闻",
            url: "http://search.sina.com.cn/?&range=title&c=news&sort=time&q={keyword:gb2312}"
        },
        cctv: {
            title: "央视网",
            subtitle: "新闻",
            url: "http://search.cctv.com/search.php?type=video&qtext="
        }
    }
};
UniSearch.data["zh-cn"]["music"] = {
    title: "音乐搜索",
    items: {
        baidu: {
            title: "千千",
            subtitle: "音乐",
            url: "http://music.baidu.com/search?key="
        },
        sogou: {
            title: "QQ",
            subtitle: "音乐",
            url: "http://mp3.sogou.com/music.so?query={keyword:gb2312}"
        },
        ting: {
            title: "酷狗",
            subtitle: "音乐",
            url: "https://www.kugou.com/yy/html/search.html#searchType=song&searchKeyWord="
        },
        haomusic: {
            title: "网易云",
            subtitle: "音乐",
            url: "https://music.163.com/#/search/m/?s="
        },
        // yinyuetai: {
        //     title: "咪咕",
        //     subtitle: "音乐",
        //     url: "https://music.migu.cn/v3/search?page=1&type=song&i=f3daad56da36c6fbefd91f5776925382c9f79bf0&f=html&s=1617874713&c=001002A&keyword="
        // },
        // nineku: {
        //     title: "九酷",
        //     subtitle: "音乐",
        //     url: "http://baidu.9ku.com/s.aspx?k={keyword:gb2312}"
        // }
    }
};
UniSearch.data["zh-cn"]["video"] = {
    title: "视频搜索",
    items: {
        baidu: {
            title: "百度",
            subtitle: "视频",
            url: "http://video.baidu.com/v?rn=20&pn=0&db=0&s=0&fbl=1024&word={keyword:gb2312}"
        },
        // kankan: {
        //     title: "迅雷",
        //     subtitle: "看看",
        //     url: "http://search.kankan.com/search.php?keyword="
        // },
        // youku: {
        //     title: "优酷",
        //     subtitle: "视频",
        //     url: "https://so.youku.com/search_video/q_{keyword:gb2312}?searchfrom=1"
        // },
        // tudou: {
        //     title: "土豆",
        //     subtitle: "视频",
        //     url: "http://so.tudou.com/isearch.do?kw={keyword:gb2312}"
        // },
        iqiyi: {
            title: "爱奇艺",
            subtitle: "视频",
            url: "http://so.iqiyi.com/so/q_"
        },
        // "56": {
        //     title: "56",
        //     subtitle: "视频",
        //     url: "http://so.56.com/index?type=video&key={keyword:gb2312}"
        // },
        qqvideo: {
            title: "腾讯",
            subtitle: "视频",
            url: "https://v.qq.com/x/search/?q="
        }/*,
        gougou: {
            title: "狗狗",
            subtitle: "视频",
            url: "http://video.gougou.com/search?id=28416&s="
        },
        OpenV: {
            title: "天线",
            subtitle: "视频",
            url: "http://www.openv.com/ls.php?t=0&x=26&y=10&q="
        }*/
    }
};
UniSearch.data["zh-cn"]["bt"] = {
    title: "影视BT",
    items: {
        gougou: {
            title: "狗狗影视",
            subtitle: "BT",
            url: "http://www.gougou.com/search?id=28416&search="
        },
        Verycd: {
            title: "Verycd",
            url: "http://www.verycd.com/search/folders/"
        },
        mtime: {
            title: "时光网",
            url: "http://www.mtime.com/search/?"
        },
        douban: {
            title: "豆瓣影评",
            url: "http://www.douban.com/subject_search?cat=1002&search_text="
        },
        shooter: {
            title: "射手字幕",
            subtitle: "BT",
            url: "http://shooter.cn/sub/?searchword="
        }
    }
};
UniSearch.data["zh-cn"]["shopping"] = {
    title: "购物频道",
    items: {
        taobao: {
            title: "Taobao.com",
            subtitle: "淘宝",
            url: "http://s.taobao.com/search?q="
        },
        dangdang: {
            title: "Dangdang.com",
            subtitle: "当当网",
            url: "http://search.dangdang.com/?key={keyword:gb2312}"
        },
        "360buy": {
            title: "JD.com",
            subtitle: "京东商城",
            url: "http://Union.360buy.com/SearchRedirect.aspx?Union_Id=197&keyword={keyword:gb2312}"
        },
        yixun: {
            title: "Yixun.com",
            subtitle: "易迅网",
            url: "http://searchex.yixun.com/html?key="
        },
        Tmall: {
            title: "Tmall.com",
            subtitle: "天猫",
            url: "http://list.tmall.com/search_product.htm?q={keyword:gb2312}"
        }
        
    }
};
UniSearch.data["zh-cn"]["answer"] = {
    title: "知识问答",
    items: {
        baidu: {
            title: "百度知道",
            url: "http://zhidao.baidu.com/q?word={keyword:gb2312}&ct=17&pn=0&tn=ikaslist&rn=10"
        },
        baike: {
            title: "百度百科",
            url: "http://baike.baidu.com/w?ct=17&lm=0&tn=baiduWikiSearch&pn=0&rn=10&word={keyword:gb2312}&submit=search"
        },
        soso: {
            title: "搜搜问问",
            url: "http://wenwen.soso.com/z/SearchSolved.e?ch=k2&sp="
        }/*,
        sina: {
            title: "新浪爱问",
            url: "http://iask.sina.com.cn/search_engine/search_knowledge_engine.php?key={keyword:gb2312}&classid=0&title=ttt&gjss=0&x=29&y=9"
        }*/,
        qihoo: {
            title: "360问答",
            url: "http://wenda.so.com/search/?q="
        }
    }
};
UniSearch.data["zh-cn"]["map"] = {
    title: "地图",
    items: {
        baidu: {
            title: "百度地图",
            url: "http://map.baidu.com/#word={keyword:gb2312}&ct=10"
        },
        google: {
            title: "谷歌地图",
            url: "http://maps.google.com/maps?q="
        },
        sogou: {
            title: "搜狗地图",
            url: "http://map.sogou.com/#c=11944000,4152000,4&city=%u5168%u56FD&lq={keyword}&page=1"
        }
    }
};
UniSearch.data["zh-cn"]["soft"] = {
    title: "软件",
    items: {
        pconline: {
            title: "太平洋",
            subtitle: "软件",
            url: "http://dl.pconline.com.cn/search.jsp?PubDate=0&DLTypeId=1&SearchType=1&submit.x=20&submit.y=14&keyword={keyword:gb2312}"
        },
        onlinedown: {
            title: "华军软件园",
            subtitle: "软件",
            url: "http://search.newhua.com/search.asp?Keyword={keyword:gb2312}"
        },
        skycn: {
            title: "天空",
            subtitle: "软件",
            url: "http://www.skycn.com/search.php?ss_name={keyword:gb2312}"
        },
        mydrivers: {
            title: "驱动之家",
            subtitle: "软件",
            url: "http://so.mydrivers.com/drivers.aspx?q={keyword:gb2312}"
        }
    }
};
UniSearch.data["zh-cn"]["blog"] = {
    title: "博客",
    items: {
		google: {
            title: "Google",
            subtitle: "博客",
            url: "http://www.google.com/search?hl=zh-CN&ie=UTF-8&lr=&tbm=blg&q={keyword:gb2312}"
        },
        yodao: {
            title: "有道",
            subtitle: "博客",
            url: "http://blog.yodao.com/search?q={keyword:gb2312}"
        },
        baidu: {
            title: "百度",
            subtitle: "博客",
            url: "http://blogsearch.baidu.com/s?wd={keyword:gb2312}"
        },
		sogou: {
            title: "搜狗",
            subtitle: "博客",
            url: "http://blogsearch.sogou.com/blog?query={keyword:gb2312}"
        }
    }
};
UniSearch.data["zh-cn"]["dict"] = {
    title: "词典翻译",
    items: {
        iciba: {
            title: "爱词霸",
            url: "http://www.iciba.com/"
        },/*,
        zdic: {
            title: "汉典",
            url: "http://www.zdic.net/zd/search/?q={keyword}"
        }*/
        baidudict: {
            title: "百度",
            subtitle: "词库",
            url: "http://dict.baidu.com/s?wd="
        },
        yodao: {
            title: "有道",
            subtitle: "海量词典",
            url: "http://dict.yodao.com/search?q={keyword}"
        },
        nciku: {
            title: "N词酷",
            url: "http://www.nciku.com/search/all/"
        },
        dictcn: {
            title: "海词",
            url: "http://www.dict.cn/search/?q={keyword:gb2312}"
        }
    }
};
UniSearch.defaults.firstShow["en-us"] = {
    title: "prefer",
    item: 0
};
UniSearch.defaults.preferredList["en-us"] = {
    prefer: 0,
    web: "google",
    image: "google",
    software: "Brothersoft",
    news: "google",
    misc: "google_groups",
    blog: "google"
};
UniSearch.defaults.order["en-us"] = ["prefer", "web", "misc", "image", "software", "blog", "set"];
UniSearch.defaults.preferredConList["en-us"] = [{
    c: "web",
    n: "google"
},
{
    c: "image",
    n: "google"
},
{
    c: "misc",
    n: "google_groups"
}];
UniSearch.data["en-us"] = {};
UniSearch.data["en-us"]["set"] = {
    title: "Language"
};
UniSearch.data["en-us"]["prefer"] = {
    title: "Prefer",
    items: [{
        c: "web",
        n: "google"
    },
    {
        c: "image",
        n: "google"
    },
    {
        c: "misc",
        n: "amazon"
    }]
};
UniSearch.data["en-us"]["web"] = {
    title: "Web",
    items: {
        google: {
            title: "Google",
            url: "http://www.google.com/search?hl=en-US&source=hp&cad=b&cad=cbv&q="
        },
        yahoo: {
            title: "Yahoo!",
            url: "http://search.yahoo.com/search?ei=utf-8&p={keyword}"
        },
        ask: {
            title: "Ask.com",
            url: "http://www.ask.com/web?q={keyword}"
        },
        live: {
            title: "Live Search",
            url: "http://search.live.com/results.aspx?q={keyword}"
        },
        gigablast: {
            title: "Gigablast",
            url: "http://www.gigablast.com/search?q={keyword}"
        }
    }
};
UniSearch.data["en-us"]["image"] = {
    title: "Images",
    items: {
        google: {
            title: "Google",
            subtitle: " Images",
            url: "http://www.google.com/search?hl=en&um=1&ie=UTF-8&tbm=isch&source=og&sa=N&tab=wi&q={keyword}"
        },
        yahoo: {
            title: "Yahoo!",
            subtitle: " Images",
            url: "http://images.search.yahoo.com/search/images?ei=UTF-8&p={keyword}"
        },
        ask: {
            title: "Ask.com",
            subtitle: " Images",
            url: "http://images.ask.com/pictures?q={keyword}&qsrc=2072&tool=img"
        },
        live: {
            title: "Live Search",
            subtitle: " Images",
            url: "http://search.live.com/images/results.aspx?q={keyword}&FORM=BIRE"
        },
        flickr: {
            title: "Flickr",
            url: "http://www.flickr.com/search/?q={keyword}"
        },
        picsearch: {
            title: "PicSearch",
            url: "http://www.picsearch.com/search.cgi?q={keyword}"
        }
    }
};
UniSearch.data["en-us"]["news"] = {
    title: "News",
    items: {
        google: {
            title: "Google",
            subtitle: " News",
            url: "http://news.google.com/news?hl=en&ned=us&q={keyword}"
        },
        yahoo: {
            title: "Yahoo!",
            subtitle: " News",
            url: "http://news.search.yahoo.com/news/search?p={keyword}"
        },
        live: {
            title: "Live Search",
            subtitle: " News",
            url: "http://search.live.com/news/results.aspx?q={keyword}&FORM=BNRE"
        },
        daypop: {
            title: "Daypop",
            subtitle: " News",
            url: "http://www.daypop.com/search?q={keyword}&t=n"
        },
        alltheweb: {
            title: "AllTheWeb",
            subtitle: " News",
            url: "http://www.alltheweb.com/search?cat=news&cs=utf8&q={keyword}&rys=0&itag=crv&_sb_lang=any"
        },
        altavista: {
            title: "AltaVista",
            subtitle: " News",
            url: "http://www.altavista.com/news/results?q={keyword}&nc=0&nr=0&nd=2"
        }
    }
};
UniSearch.data["en-us"]["misc"] = {
    title: "Misc.",
    items: {
        google_groups: {
            title: "Google Groups",
            url: "http://groups.google.com/groups/search?q={keyword}"
        },
        google_maps: {
            title: "Google Maps",
            url: "http://maps.google.com/maps?ie=UTF-8&oe=UTF-8&hl=en&q={keyword}&z=4&om=1&um=1&sa=N&tab=wl"
        },
        amazon: {
            title: "Amazon",
            url: "http://www.amazon.com/gp/search?ie=UTF8&keywords={keyword}&index=blended&linkCode=ur2&camp=1789&creative=9325"
        },
        ebay: {
            title: "eBay",
            url: "http://shop.ebay.com/items/_W0QQ_nkwZ{keyword}QQ_armrsZ1QQ_fromZR3QQ_mdoZQQ_sopZ1"
        },
        youtube: {
            title: "YouTube",
            url: "http://www.youtube.com/results?search_query={keyword}"
        },
        yahoo: {
            title: "Yahoo! Answers",
            subtitle: "",
            url: "http://answers.yahoo.com/search/search_result;_ylt=AlnxKjDWkwMepoT1FRXn2tgjzKIX?p={keyword}"
        }
    }
};
UniSearch.data["en-us"]["software"] = {
    title: "software",
    items: {
        Brothersoft: {
            title: "Brothersoft",
            url: "http://maxthonsearch.brothersoft.com/home.php?act=search_home.index&keyword={keyword}"
        },
        softpedia: {
            title: "Softpedia",
            url: "http://www.softpedia.com/dyn-search.php?search_term={keyword}"
        }
    }
};
UniSearch.data["en-us"]["blog"] = {
    title: "Blog",
    items: {
        google: {
            title: "Google",
            subtitle: " Blogs",
            url: "http://blogsearch.google.com/blogsearch?ie=UTF8&oe=UTF-8&hl=en&q={keyword}&om=1&z=4&tab=lb"
        },
        ask: {
            title: "Ask.com",
            subtitle: " Blogs",
            url: "http://www.ask.com/blogsearch?q={keyword}"
        },
        technorati: {
            title: "Technorati",
            url: "http://technorati.com/search/{keyword}"
        }
    }
};
UniSearch.data["en-us"]["reference"] = {
    title: "Reference",
    items: {
        dictionary: {
            title: "Dictionary.com",
            url: "http://dictionary.reference.com/browse/{keyword}"
        },
        webster: {
            title: "Merriam-Webster",
            url: "http://www.webster.com/dictionary/{keyword}"
        },
        wikipedia: {
            title: "Wikipedia",
            url: "http://www.wikipedia.org/w/wiki.phtml?search={keyword}"
        },
        encarta: {
            title: "Encarta",
            url: "http://encarta.msn.com/encnet/refpages/search.aspx?q={keyword}"
        },
        britannica: {
            title: "Britannica",
            url: "http://www.britannica.com/search?query={keyword}"
        },
        infomine: {
            title: "Infomine",
            url: "http://infomine.ucr.edu/cgi-bin/canned_search?query={keyword}"
        }
    }
};
UniSearch.defaults.firstShow["fr-fr"] = {
    title: "prefer",
    item: 0
};
UniSearch.defaults.preferredList["fr-fr"] = {
    prefer: 0,
    web: "google",
    image: "google",
    news: "google",
    misc: "google_groups",
    blog: "google",
    reference: "dictionary"
};
UniSearch.defaults.order["fr-fr"] = ["prefer", "web", "news", "image", "blog", "reference", "misc", "set"];
UniSearch.defaults.preferredConList["fr-fr"] = [{
    c: "web",
    n: "google"
},
{
    c: "image",
    n: "google"
},
{
    c: "news",
    n: "google"
}];
UniSearch.data["fr-fr"] = {};
UniSearch.data["fr-fr"]["prefer"] = {
    title: "Préféré",
    items: [{
        c: "web",
        n: "google"
    },
    {
        c: "image",
        n: "google"
    },
    {
        c: "news",
        n: "google"
    }]
};
UniSearch.data["fr-fr"]["set"] = {
    title: "Langue"
};
UniSearch.data["fr-fr"]["web"] = {
    title: "Web",
    items: {
        google: {
            title: "Google",
            url: "http://www.google.com/search?hl=fr&source=hp&cad=b&cad=cbv&q={keyword}"
        },
        yahoo: {
            title: "Yahoo!",
            url: "http://fr.search.yahoo.com/search?ei=utf-8&p={keyword}"
        },
        ask: {
            title: "Ask.com",
            url: "http://fr.ask.com/web?q={keyword}"
        },
        live: {
            title: "Live Search",
            url: "http://search.live.com/results.aspx?q={keyword}"
        },
        exalead: {
            title: "Exalead",
            url: "http://www.exalead.fr/search/results?q={keyword}&%24mode=allweb"
        },
        voila: {
            title: "Voila",
            url: "http://search.ke.voila.fr/S/voila?rtype=kw&rdata={keyword}&profil=voila"
        }
    }
};
UniSearch.data["fr-fr"]["image"] = {
    title: "Images",
    items: {
        google: {
            title: "Google",
            subtitle: " Images",
            url: "http://www.google.com/search?hl=fr&um=1&ie=UTF-8&tbm=isch&source=og&sa=N&tab=wi&q={keyword}"
        },
        yahoo: {
            title: "Yahoo!",
            subtitle: " Images",
            url: "http://fr.search.yahoo.com/search/images?ei=UTF-8&p={keyword}"
        },
        ask: {
            title: "Ask.com",
            subtitle: " Images",
            url: "http://fr.ask.com/pictures?q={keyword}&qsrc=2072&tool=img"
        },
        live: {
            title: "Live Search",
            subtitle: " Images",
            url: "http://search.live.com/images/results.aspx?q={keyword}&FORM=BIRE"
        },
        flickr: {
            title: "Flickr",
            url: "http://www.flickr.com/search/?q={keyword}"
        },
        picsearch: {
            title: "PicSearch",
            url: "http://www.picsearch.fr/search.cgi?q={keyword}"
        }
    }
};
UniSearch.data["fr-fr"]["news"] = {
    title: "Nouvelles",
    items: {
        google: {
            title: "Google",
            subtitle: " News",
            url: "http://news.google.fr/news?hl=fr&ned=fr&q={keyword}"
        },
        yahoo: {
            title: "Yahoo!",
            subtitle: " News",
            url: "http://fr.news.search.yahoo.com/news/search?p={keyword}"
        },
        live: {
            title: "Live Search",
            subtitle: " News",
            url: "http://search.live.com/news/results.aspx?q={keyword}&FORM=BNRE"
        },
        alltheweb: {
            title: "AllTheWeb",
            subtitle: " News",
            url: "http://www.alltheweb.com/search?cat=news&cs=utf8&q={keyword}&rys=0&itag=crv&_sb_lang=fr"
        },
        altavista: {
            title: "AltaVista",
            subtitle: " News",
            url: "http://www.altavista.com/news/results?q={keyword}&nc=0&nr=0&nd=2"
        }
    }
};
UniSearch.data["fr-fr"]["blog"] = {
    title: "Blog",
    items: {
        google: {
            title: "Google",
            subtitle: " Blogs",
            url: "http://blogsearch.google.fr/blogsearch?ie=UTF8&oe=UTF-8&hl=fr&q={keyword}&om=1&z=4&tab=lb"
        },
        ask: {
            title: "Ask.com",
            subtitle: " Blogs",
            url: "http://fr.ask.com/blogsearch?q={keyword}"
        },
        technorati: {
            title: "Technorati",
            url: "http://technorati.com/search/{keyword}?language=fr&authority=n"
        }
    }
};
UniSearch.data["fr-fr"]["reference"] = {
    title: "Références",
    items: {
        dictionary: {
            title: "Dictionary.com",
            url: "http://dictionary.reference.com/browse/{keyword}"
        },
        tv5: {
            title: "Dictionnaire TV5",
            url: "http://dictionnaire.tv5.org/dictionnaires.asp?Action=&param={keyword}&che=1"
        },
        alexandria: {
            title: "Dictionnaire Alexandria",
            url: "http://www.tv5.org/TV5Site/alexandria/definition.php?sl=fr&tl=fr&ok.x=0&ok.y=0&ok=OK&terme={keyword}"
        },
        wikipedia: {
            title: "Wikipédia",
            url: "http://fr.wikipedia.org/wiki/{keyword}"
        },
        encarta: {
            title: "Encarta",
            url: "http://fr.encarta.msn.com/encnet/refpages/search.aspx?q={keyword}"
        }
    }
};
UniSearch.data["fr-fr"]["misc"] = {
    title: "Divers",
    items: {
        google_groups: {
            title: "Google Groupes",
            url: "http://groups.google.fr/groups/search?q={keyword}"
        },
        google_maps: {
            title: "Google Maps",
            url: "http://maps.google.fr/maps?ie=UTF-8&oe=UTF-8&hl=fr&q={keyword}&z=4&om=1&um=1&sa=N&tab=wl"
        },
        amazon: {
            title: "Amazon",
            url: "http://www.amazon.fr/s/ref=nb_ss_gw/002-0555077-8828815?url=search-alias%3Daps&field-keywords={keyword}"
        },
        ebay: {
            title: "eBay",
            url: "http://acheter.ebay.fr/{keyword}"
        },
        youtube: {
            title: "YouTube",
            url: "http://www.youtube.com/results?search_query={keyword}"
        },
        yahoo: {
            title: "Yahoo Questions Réponses",
            subtitle: "",
            url: "http://fr.search.yahoo.com/search?&ygmasrchbtn=web+search&fr=ush-ans&p={keyword}"
        }
    }
};
