var info;var goal;
info = [{name:"city",link:"/images/city.jpg"},{name:"car",link:"/images/car.jpg"},{name:"apple",link:"/images/apple.jpg"},{name:"pineapple",link:"/images/pineapple.jpg"},{name:"bicycle",link:"/images/bicycle.jpg"}]
var arr =[];
var random = Math.random()*10;
var random1 = random%5;
var random2 = Math.floor(random1);   
    for(var i =0;i<3;i++)
    {
        var rand = Math.floor((Math.random()*info.length));       
        if(arr.indexOf(rand)==-1){
            arr.push(rand);
            $("#img"+i).attr("src",info[arr[i]].link);            
        }
        else{
            i--;
        }
    }    
    goal = arr[Math.floor(Math.random()*arr.length)]; 
    $("h1").text(info[goal].name);
    $("div").on("click","img",function(){
        if($(this).attr("src")!==info[goal].link){
            $(this).css("visibility","hidden");
        }else{
            $("img").attr("src",info[goal].link);
            $("img").css("visibility","visible");
            alert("Well Done!");
        }
    }); 


