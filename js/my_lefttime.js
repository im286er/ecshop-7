var cur_date = new Date();
var startTime = cur_date.getTime();
var Temp;
var timerID = null;
var timerRunning = false;
 
var _date = "天";
var _hour = "时";
var _minute = "分";
var _second = "秒";
var _end = "结束"; 

var getElementsByClassName = function (searchClass, node,tag) {
    if(document.getElementsByClassName){
        return  document.getElementsByClassName(searchClass)
    }else{
        node = node || document;
        tag = tag || "*";
        var classes = searchClass.split(" "),
        elements = (tag === "*" && node.all)? node.all : node.getElementsByTagName(tag),
        patterns = [],
        returnElements = [],
        current,
        match;
        var i = classes.length;
        while(--i >= 0){
            patterns.push(new RegExp("(^|\\s)" + classes[i] + "(\\s|$)"));
        }
        var j = elements.length;
        while(--j >= 0){
            current = elements[j];
            match = false;
            for(var k=0, kl=patterns.length; k<kl; k++){
                match = patterns[k].test(current.className);
                if (!match)  break;
            }
            if (match)  returnElements.push(current); 
        }
        return returnElements;
    }
}

var goods_left_time_div = getElementsByClassName("timeBox");
function showtime(obj)
{
  //根据开始时间和结束时间，当前时间取剩余时间
  var t_start =  obj.getAttribute("s"); //服务端开始时间
  var t_end =  obj.getAttribute("e"); //服务端结束时间
  var t_now =  obj.getAttribute("n");  //服务端当前时间
  
  if (t_end > 0)
  {
    if (t_now == "")
    {
      var tmp_val = parseInt(t_end) - parseInt(cur_date.getTime() / 1000 + cur_date.getTimezoneOffset() * 60);
    }
    else
    {
      var tmp_val = parseInt(t_end) - t_now;
    }
     var t_between = tmp_val; //计算出结束时间和现在时间间的时间差
  }
  now = new Date();
  var ts = parseInt((startTime - now.getTime()) / 1000) + t_between;
  var dateLeft = 0;
  var hourLeft = 0;
  var minuteLeft = 0;
  var secondLeft = 0;
  var hourZero = '';
  var minuteZero = '';
  var secondZero = '';
  if (ts < 0)
  {
    ts = 0;
    CurHour = 0;
    CurMinute = 0;
    CurSecond = 0;
  }
  else
  {
    dateLeft = parseInt(ts / 86400);
    ts = ts - dateLeft * 86400;
    hourLeft = parseInt(ts / 3600);
    ts = ts - hourLeft * 3600;
    minuteLeft = parseInt(ts / 60);
    secondLeft = ts - minuteLeft * 60;
  }

  if (hourLeft < 10)
  {
    hourZero = '0';
  }
  if (minuteLeft < 10)
  {
    minuteZero = '0';
  }
  if (secondLeft < 10)
  {
    secondZero = '0';
  }

  if (dateLeft > 0)
  {
    Temp = "<strong>"+dateLeft+"</strong>"+_date+"<strong>"+hourZero+hourLeft+"</strong>"+_hour+"<strong>"+ minuteZero+minuteLeft+"</strong>"+_minute+"<strong>"+secondZero+secondLeft+"</strong>"+_second;
  }
  else
  {
    if (hourLeft > 0)
    {
      Temp = "倒计时: <strong>" + hourLeft + "</strong>" + _hour + "<strong>" + minuteZero + minuteLeft + "</strong>" + _minute + "<strong>" + secondZero + secondLeft + "</strong>" + _second;
    }
    else
    {
      if (minuteLeft > 0)
      {
        Temp = "倒计时: <strong>" + minuteLeft + "</strong>" + _minute + "<strong>" + secondZero + secondLeft + "</strong>" + _second;
      }
      else
      {
        if (secondLeft > 0)
        {
          Temp = "倒计时 :<strong>" + secondLeft  + "</strong>" + _second;
        }
        else
        {
          Temp = '';
        }
      }
    }
  }

  if (t_between <= 0 || Temp == '')
  {
    Temp = "<strong>" + _end + "</strong>";
  }
  obj.innerHTML = Temp;
}
function showalltime()
{
   for(var k=0, kl=goods_left_time_div.length; k<kl; k++)
   {
		showtime(goods_left_time_div[k]);
	}
	
    timerID = setTimeout("showalltime()", 1000);
    timerRunning = true;
	
}
function stopclock()
{
  if (timerRunning)
  {
    clearTimeout(timerID);
  }
  timerRunning = false;
}
function startclock()
{
  stopclock(); //清除时间触发器
  showalltime();
}
startclock();
