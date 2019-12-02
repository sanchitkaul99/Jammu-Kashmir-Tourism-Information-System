document.querySelector('.img__btn').addEventListener('click', function() {
  document.querySelector('.cont').classList.toggle('s--signup');
});
$(".img__btn").on("mouseenter",function(){
	$(this).css("font-weight","bold");
});
$(".img__btn").on("mouseleave",function(){
	$(this).css("font-weight","normal");
});