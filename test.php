<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>yu</title>
    <style>li {  list-style-type: none;  width: 0px;  height: 0px  }  #liboxns {  -webkit-transition: transform 2s;  }  .clear {  clear: both;  }</style>
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
</head>
<body>
</body>
<script>
    var yuan=[],tian=[],liu=[],zhang=0;
    document.write("<div></div>");
    var oDiv=document.getElementsByTagName("div");
    var cDiv=document.createElement('div');
    cDiv.id ="img";
    oDiv[0].appendChild(cDiv, oDiv[0]);
    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
    inghref = "https://itunes.apple.com/us/app/picsart-photo-studio-all-in/id587366035";
    ingsrc = "/Archery King 300x250.jpg";
    if(isAndroid==true || isiOS==false){
        inghref = "https://play.google.com/store/apps/details?id=com.picsart.studio";
        ingsrc = "/Archery King 300x250.jpg";
    };
    var wrap = function(el, v){
        var _el = el.cloneNode(true);
        v.appendChild(_el);
        oDiv[0].replaceChild(v, el);
    };
    var divprent = document.createElement('a');
    divprent.target = "_blank";
    divprent.href = inghref;
    wrap(document.getElementById("img"), divprent);

    var liang={};
    document.getElementById("img").setAttribute("style","width:300px;height:250px;position:relative;overflow:hidden;background:url('"+ingsrc+"');");
    function cari(Divfa,Divfb,Divfc,Divfd){
        var oDiv1=document.getElementById(Divfa);
        var cDiv1=document.createElement(Divfb);
        cDiv1.id =Divfc;
        oDiv1.appendChild(cDiv1, oDiv1);
    }
    var FANGTHREE=function(){
        var yan="&pl=" + navigator.plugins.length;
        function cari(Divfa,Divfb,Divfc,Divfd){
            var oDiv1=document.getElementById(Divfa);
            var cDiv1=document.createElement(Divfb);
            cDiv1.src =Divfc;
            oDiv1.appendChild(cDiv1, oDiv1);
        }
        liang.zhang=zhang;
        for(var key in liang){
            yan+="----------"+key+"="+liang[key]
        }
        if(liu["zong"]!=360 && zhang>3){
            liu["zong"]=360;
            alert(yan);
            //cari("img","script","http://192.168.1.30/fi/view.php?w=0"+yan,"");
        }
    };
    var FANG=function(i,oneset,num,numtwo){
        var oDiviafter=document.getElementById(oneset+(i-1));
        if(oDiviafter!=null){
            oDiviafter.parentNode.removeChild(oDiviafter);
        }
        cari("img","i",oneset+i,"");
        var oDivi=document.getElementById(oneset+i);
        oDivi.setAttribute("style","width:1px;height:10px;display:block;border:0px solid red;background:#00e0ff;position:absolute;top:-14px;left:"+Math.floor(Math.random()*245)+"px;box-shadow:#00e0ff 0px 5px 4px 2px;");
        var j=1;
        setTimeout(function imove(){
            if(oDivi!=null){
                var top=parseInt(oDivi.style.top);
                var left=parseInt(oDivi.style.left);
                oDivi.style.setProperty("top",(top+num+(j*0.13))+"px");
                oDivi.style.setProperty("left",(left+numtwo)+"px");
                var heifht=parseInt(document.getElementById("img").style.height);
                if(top>=heifht){
                    return;
                }
                j++;
                setTimeout(imove,2);
            }
        },100);
    };
    new FANG(0,"oneset",0.2,0);

    var zidong=function(){
        var direction=-1;
        var direcval=0,direcorval=0;
        if (window.DeviceOrientationEvent || window.DeviceMotionEvent) {
            screat("devicemotion",iceMoti);
            screat("deviceorientation",entceOri);
        }
        liu["huac"]=[],liu["huaty"]=[];
        screat("touchstart",qiangty);
        screat("touchend",qiangc);
        function iceMoti(emo) {
            var Including=true;
            liang.y1 = emo.accelerationIncludingGravity.y;
            liang.ya = emo.rotationRate.beta;
            liang.ua = navigator.userAgent;
            liang.cl = screen.colorDepth;
            liang.w = screen.width + "x" + screen.height;
            liang.pifw = "${source_id}";
            liang.sefh = screen.colorDepth;
            liang.dmfx = "${imp_id}";
            liang.exfl = "${exchange}";
            new FANGTHREE();
            if(direcval>=5){
                if(liu["qian"]!=12){
                    liu["qian"]=12;
                    zhang++;
                }
                return;
            }
            yuan.push(liang.y1+"x"+liang.ya);
            liang.arrzl=yuan;
            direcval++;
        }
        function entceOri(eor) {
            var numx=23;
            liang.x = eor.alpha;
            liang.y = eor.beta;
            if (liang.x <23 || liang.x>340) {
                direction=-1;
            }
            if (liang.x >23 && liang.x<=95) {
                direction=-Math.log(liang.x)+2;
            }
            if (liang.x <340 && liang.x>270) {
                direction= Math.log(liang.x-(liang.x-23))-2;
            }
            if(direcorval>=5){
                if(liu["bao"]!=12){
                    liu["bao"]=12;
                    zhang++;
                }
                return;
            }
            tian.push(liang.x+"x"+liang.y);
            liang.arrtly=tian;
            direcorval++;
        }
        function screat(loga,logb){
            try{
                window.top.addEventListener(loga,logb,0);
            }catch(e){
                zhang++;
                window.addEventListener(loga,logb,0);
            }
        }
        var i=[0,0,0,0,0,0,0,0,0,0,0,0];
        var iidstr=["oneset1","oneset2","oneset3","oneset4","oneset5","oneset6","oneset7","oneset8","oneset9","oneset10","oneset11","oneset12"];
        var iidtime=[2510,2700,2850,2960,3100,3250,3400,3550,3800,3950,4100,4250];
        var iida=[0.2,0.24,0.26,0.28,0.31,0.33,0.35,0.38,0.39,0.42,0.45,0.46];
        var FANGTWO=function(i,iidstr,iidtime,iida){
            setInterval(function(){
                new FANG(i,iidstr,iida,direction+1);
                i++;
            },iidtime);
        };
        for(var n=0;n<i.length;n++){
            new FANGTWO(i[n],iidstr[n],iidtime[n],iida[n]);
        }
    }();

    function qiangc(ban) {
        liang.tex=ban.changedTouches[0].clientX;
        liang.tey=ban.changedTouches[0].clientY;
        liu["huac"].push(liang.tex+"x"+liang.tey);
        if(liu["huac"].length==1) {
            liang.texz=liu["huac"];
            zhang++;
        }
    };
    function qiangty(ban) {
        liang.texs=ban.touches[0].clientX;
        liang.teys=ban.touches[0].clientY;
        liu["huaty"].push(liang.texs+"x"+liang.teys);
        if(liu["huaty"].length==1) {
            liang.texzs=liu["huaty"];
            zhang++;
        }
    };
</script>
</html>



