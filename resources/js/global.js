import $ from 'jquery'
import readmore from 'readmore-js/readmore.min'

$(document).ready(() => {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1000) {
			$('#btn-go__to__top').fadeIn()
		} else {
			$('#btn-go__to__top').fadeOut()
		}
	})

	$('#btn-go__to__top').click(() => {
		$('html, body').animate({ scrollTop: 0 }, 800)
	})

	$('article').readmore({
		collapsedHeight: 70,
		moreLink: '<a href="#">Показать текст  <i class="fas fa-angle-double-right"></i></a>',
		lessLink: '<a href="#">Скрыть <i class="fas fa-angle-double-up"></i></a>'
	})

	$('#sidebarCollapse').on('click',  () => {
		$('#sidebar').toggleClass('active')
	})
})

