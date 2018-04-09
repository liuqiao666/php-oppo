
$('#header').load('data/header.php',function(){
  //load的回调函数——异步请求成功完成后才执行
  if(sessionStorage['LoginName']==null){
    $('#header').load('data/header.php');
  }
  else{
    $('#welcome').html("欢迎："+sessionStorage['LoginName']).css('color','#fff');
    $('#register').hide();
    $('#welcome').append(' <a href="oppo_login.html" id="logout"> 退出</a>');
    $('#logout').click(function(){
      sessionStorage.removeItem('LoginName');
    })
  }
});
$(function(){
  $('#footer').load('data/footer.php');
  $('#corner').load('data/corner.php');
});

/*广告图片数组*/
var imgs=[
	{"i":0,"img":"images/ad_1.jpg"},
  {"i":1,"img":"images/ad_2.jpg"},
  {"i":2,"img":"images/ad_3.jpg"},
  {"i":3,"img":"images/ad_4.jpg"},
];
var adv={
  LIWIDTH:0,//每个li的宽度
  $ulImgs:null,//#imgs的ul
  INTERVAL:1000,//动画的时间间隔
  WAIT:3000,//自动轮播之间的等待
  timer:null,//自动轮播定时器的序号
  init(){
    //获得id为slider的元素的width转为浮点数保存在LIWIDTH属性中
    this.LIWIDTH=parseFloat(
      $("#slider").css("width")
    );
    //获得id为imgs的ul保存在$ulImages中
    this.$ulImgs=$("#imgs");
    this.updateView();//更新页面
    //为id为indexs的ul添加鼠标进入事件委托
      //要求: li元素可响应事件
    $("#indexs").on("mouseover","li",(e)=>{
      //用index检查当前li在indexs>li中的下标i保存在变量target
      var target=$("#indexs>li").index(e.target);
      //获得imgs数组中0位置的元素的i属性保存在old
      var old=imgs[0].i;
      this.move(target-old);//调用moveLeft
    });
    this.autoMove();//启动自动轮播
  },
  autoMove(){//启动自动轮播
    //启动一次性定时器,等待WAIT后,执行move(1),将序号保存在timer中
    this.timer=setTimeout(
      ()=>this.move(1),this.WAIT
    );
  },
  movePrev(n){//右移前的准备
    n*=-1;//将n*-1
    //删除imgs结尾的n个元素拼到开头
    imgs=imgs.splice(-n,n).concat(imgs)
    this.updateView();//更新界面
    //修改$ulImgs的left为left-n*LIWIDTH
    this.$ulImgs.css("left",
      parseFloat(this.$ulImgs.css("left"))
      -n*this.LIWIDTH
    );
  },
  move(n){
    clearTimeout(this.timer);//停止一次性定时器
    if(n<0){//如果右移:
      this.movePrev(n);//先准备
      this.$ulImgs.stop(true).animate(//再移动
        {left:0},
        this.INTERVAL,
        ()=>this.autoMove()
      );
    }else{
      //停止$ulImgs上一切动画
      //让$ulImgs的left在INTERVAL时间内变到-n*LIWIDTH,动画接收后执行moveLeftCallback
      this.$ulImgs.stop(true).animate(//先移动
        {left:-n*this.LIWIDTH},
        this.INTERVAL,
        ()=>this.moveCallback(n)//再修改
      );
    }
  },
  moveCallback(n){//左移结束的回调函数
    //删除数组开头的n个元素拼接到结尾
    imgs=imgs.concat(imgs.splice(0,n));
    this.updateView();//更新页面
    //让$ulImgs的left归0
    this.$ulImgs.css("left",0);
    this.autoMove();//启动自动轮播
  },
  updateView(){//将imgs数组中的内容更新到页面
    //遍历imgs数组,同时声明空字符串lis,idxs
    for(var i=0,lis="",idxs="";
        i<imgs.length;
        i++){
      lis+=`<li><img src="${imgs[i].img}"></li>`
      idxs+="<li></li>"
    }
    //设置$ulImgs的内容为lis，继续设置宽为imgs数组的元素个数*LIWIDTH
    this.$ulImgs.html(lis).css(
      "width",imgs.length*this.LIWIDTH);
    //设置id为indexs的内容为idxs
    //设置id为indexs下的?位置的li的class为hover
      //其中?是imgs中0位置的元素的i属性值
    $("#indexs").html(idxs)
      .children(`li:eq(${imgs[0].i})`)
        .addClass("hover");
  }
}
adv.init();

