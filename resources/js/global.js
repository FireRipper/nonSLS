import $ from 'jquery'
import readmore from 'readmore-js/readmore.min'

$(document).ready(() => {
	const sideBar = $('#sidebar')
	const contentSpan = $('.content-admin__span')
	const sideBarSpan = $('.sidebar-list-ul-li-a__span')

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
		sideBar.toggleClass('active')
		if(sideBar.hasClass('active')){
			contentSpan.text('')
			sideBarSpan.hide()
		} else {
			contentSpan.text('Скрыть меню')
			sideBarSpan.show()
		}
	})


})

