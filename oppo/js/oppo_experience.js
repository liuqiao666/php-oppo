loadProductByPage(1);
//异步请求商品数据(分页)，修改商品列表，修改分页条内容
function loadProductByPage(pageNum){
    $.ajax({
        type: 'GET',
        //url: 'data/3_product_select.php',
        url: 'data/oppo_experience_select.php',
        data: {pageNum: pageNum},
        success: function(pager){ //服务器返回分页对象
            //遍历分页对象中的产品数据
            var html = '';  //产品内容
            $.each(pager.data, function(i, p){ //遍历每一个商品
                html += `
                <li>
                <div class="look">
                    <img src="images/experience/marker.png" alt="" class="lf"/><span class="number">${p.aid}</span>
                    <b>${p.store}</b><br/><a href="">查看详情</a>
                </div >
                <p class="other"><a href="">${p.type}</a></p>
                <p class="only"><a href="">${p.address}</a></p>
                <p class="other"> <a href="">${p.tel}</a></p>
            </li>
          `;});

            $('#div1').html(html);


            //修改分页条中的内容
            //var html = '';  //分页条中的内容
            //html += `<li class="active"><a href="#">${pager.pageNum}</a></li> `;
            //html += `<li><a href="${pager.pageNum+1}">${pager.pageNum+1}</a></li> `;
            //html += `<li><a href="${pager.pageNum+2}">${pager.pageNum+2}</a></li> `;
            //$('.pager').html(html);

        },
        error: function(){
            alert('产品列表响应完成但有问题');
        }
    });
}
$('.pager').on('click', 'a', function(e){
    e.preventDefault();
    var pn = $(this).attr('href'); //要显示的页号
    loadProductByPage(pn); //异步加载商品数据
});
