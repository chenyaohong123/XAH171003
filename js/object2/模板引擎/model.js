/*本模板是基于JQuery
 * 这是一个confrim 信息提示筺。
 * 
 */
var mess = {
//	title:'宝宝很生气',//弹出框标题
//	content:'后果和严重',//弹出框提示信息
//	sureBtnText:'ok',//确定按钮显示的文字
//	exitBtnText:'exit',//取消按钮显示文字
//	titleBg:'#eee',//标题背景色
//	titleColor:'#000',//标题字体颜色
//	conBg:'black',//内容背景色
//	conColor:'#fff',//内容颜色
//	sbBg:'green',//确定按钮背景色
//	sbColor:'yellow',//确定按钮的字体颜色
//	ebBg:'red',//取消按钮的背景色
//	ebColor:'blue',//取消按钮的字体颜色
//	sbClick:function(){//确定按钮的点击事件
//		console.log('确定');		
//	},
//	ebClick:function(){//取消按钮的点击事件
//		console.log('取消');		
//	}
}
    var warn1 = '../模板引擎/img/0080180031.jpg';
	var warn2 = '../模板引擎/img/timg (1).jpeg';
function window_confirm(setObj){
	var newConfirm =$('<div id="confirm"><div class="con_wrap"><div class="con_title">标题</div><img src="" alt="" class="img" /><div class="con_content">您是否确定要进行删除</div><div class="con_btns"><div class="sb">确定</div><div class="eb">取消</div></div></div></div><div id="cover"></div>');
	$('body').append(newConfirm);
	
	//根据setObj设置弹出框的基本内容
	console.log(setObj);
	
	var title = setObj.title?setObj.title:'这是一个危险的操作';
	$('#confirm .con_title').text(title);
	
	
	var img  = setObj.img;
	$('#confirm .img').attr('src',img);
	
	var content = setObj.content?setObj.content:'您是否确定要删除';
	$('#confirm .con_content').text(content);
	
	var sbt = setObj.sureBtnText?setObj.sureBtnText:'确定';
	$('#confirm .con_btns .sb').text(sbt);
	
	var ebt = setObj.exitBtnText?setObj.exitBtnText:'取消';
	$('#confirm .con_btns .eb').text(ebt);
	
	
    var titleBg = setObj.titleBg?setObj.titleBg:'black';
    var titleColors = setObj.titleColors?setObj.titleColors:'white';
	$('#confirm .con_title').css({
		'background': titleBg,
		'color':titleColors
	});
	
	
	var conBg = setObj.conBg?setObj.conBg:'rgb(249,249,249)';
	var conColor = setObj.conColor?setObj.conColor:'black';
	$('#confirm .con_content').css({
		'background':conBg,
		'color':conColor
	});
	
	
	var sbBg = setObj.sbBg?setObj.sbBg:'rgb(249,249,249)';
	var sbColor = setObj.sbColor?setObj.sbColor:'black';
	$('#confirm .con_btns .sb').css({
		'background':sbBg,
		'color':sbColor
	});
	
	
	var ebBg = setObj.ebBg?setObj.ebBg:'rgb(249,249,249)';
	var ebColor = setObj.ebColor?setObj.ebColor:'black';
	$('#confirm .con_btns .eb').css({
		'background':ebBg,
		'color':ebColor
	});
	
	//确定按钮和取消按钮的点击事件
	$('#confirm .con_btns .sb').click(function(){
		if(setObj.sbClick){
			setObj.sbClick();
		}
		
		//移除confirm弹框
		$('#confirm').remove();
		$('#cover').remove();
		$("body").css('overflow','scroll');
	});
	
	$('#confirm .con_btns .eb').click(function(){
		if(setObj.ebClick){
			setObj.ebClick();
		}
    	    $('#confirm').remove();
    	    $('#cover').remove();
    	   $("body").css('overflow','scroll');
   });
   
   
   $("body").css('overflow','hidden');
	$('#cover').click(function(){
  	   $('#confirm').remove();
		$('#cover').remove();
	$("body").css('overflow','scroll');	
		
   });
    }

  
    
//window_confirm(mess);