    // ***************** Navbar start ************//
    var count=0;
        function mobilenav(){       
            let nav=document.getElementById("mobilenav");
            let close = document.getElementById("close");
            let open = document.getElementById("open");
            let list = document.getElementById("list");
            if(count == 0){
                nav.style.height="100vh";
                open.style.display="none";
                setTimeout(()=>{
                    list.style.display="block";
                },500);
                    nav.style.width="100%";
                    close.style.display="block";
                count=1;
            }else{
                nav.style.width="0%";
                    nav.style.height="0vw";                    
                    list.style.display="none";
                    close.style.display="none";
                    open.style.display="block";
                count=0;
            }
        }
        // *************** Navbar end ******************//

        // ***************  Scroll events start *********************//
        window.onscroll=()=>{
            var open = document.getElementById("open");
            var totop = document.getElementById('totop');
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                open.style.display="block";
                open.style.backgroundColor = "#ffffff";
                open.style.boxShadow="0px 2px 7px #fefefe";
                totop.style.display="block";
              } else {
                open.style.display="none";
                open.style.backgroundColor = "rgba(241, 113, 171, 0)";
                open.style.boxShadow="none";
                totop.style.display="none";
              }
        }

        // ***************  Scroll events end *********************//

        // **************** video slider start ********************//

        function videoUrl(vid)
        {
            document.getElementById("vidslider").src = vid;
        }

        // ***************** video slider end ********************//
        // *************** count start ***************************//

        function Countdown(){
            var now=new Date();
            var gates=new Date(2020,02,18);
            var nowTime=now.getTime();
            var eventTime=gates.getTime();
            if(nowTime>eventTime){
                
            document.getElementById("days").textContent=0;
            document.getElementById("hours").textContent=0;
            document.getElementById("minutes").textContent=0;
            document.getElementById("seconds").textContent=0;
            }
            else{
                var timeLeft=eventTime-nowTime;

                var s=Math.floor(timeLeft/1000);
                var m=Math.floor(s/60);
                var h=Math.floor(m/60);
                var d=Math.floor(h/24);

                h%=24;
                m%=60;
                s%=60;

                d=(d<10)?"0"+d:d;
                h=(h<10)?"0"+h:h;
                m=(m<10)?"0"+m:m;
                s=(s<10)?"0"+s:s;

                document.getElementById("days").textContent=d;
                document.getElementById("hours").textContent=h;
                document.getElementById("minutes").textContent=m;
                document.getElementById("seconds").textContent=s;


                setTimeout(Countdown,1000);
            }
        }

        // to top

        function totop(){
            document.body.scrollTop='0';
            document.documentElement.scrollTop='0';
        }
