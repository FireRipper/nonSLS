import $ from 'jquery'
import readmore from 'readmore-js/readmore.min'

$(document).ready(() => {
	const sideBar = $('#sidebar')
	const contentSpan = $('.content-admin__span')
	const sideBarSpan = $('.sidebar-list-ul-li-a__span')
	const btnCancel = $('.form-home-btn-cancel')
	const formSpan = $('.form-home__user__style__span')
	const formInput = $('.form-home__user__style__input')
	const btnSave = $('.form-home-btn-submit')
	const btnEdit = $('.form-home-btn-edit')
	let cloneCount = 1;
	let delCount = 1;

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

	$('.copy-email_user').click((evt) => {
		selectAll(evt.currentTarget)
		execCopy()
	})

	/**
	 * @param {String, Node} node
	 */
	function selectAll(node) {
		if (!(node instanceof Node)) {
			node = document.querySelector(node)
		}

		window.getSelection().selectAllChildren(node)
	}

	/**
	 * @return {boolean}
	 */
	function execCopy() {
		return document.execCommand('copy')
	}

	$('.form-home__user__btn__edit').on('click', () => {

		formSpan
			.removeClass('d-block')
			.addClass('d-none')

		formInput
			.removeClass('d-none')
			.addClass('d-block')

		btnSave
			.removeClass('d-none')
			.addClass('d-block')

		btnCancel
			.removeClass('d-none')
			.addClass('d-block')

		btnEdit
			.addClass('d-none')
			.removeClass('d-block')
	})

	btnCancel.on('click', () => {
		formSpan
			.removeClass('d-none')
			.addClass('d-block')

		formInput
			.addClass('d-none')
			.removeClass('d-block')

		btnSave
			.addClass('d-none')
			.removeClass('d-block')

		btnCancel
			.addClass('d-none')
			.removeClass('d-block')

		btnEdit
			.removeClass('d-none')
			.addClass('d-block')
	})
	$('.content-admin-report__btn__add__input').click(() => {
		const report = $('#report')

		report
			.clone()
			.attr('id', 'report'+ cloneCount++)
			.removeClass('del-me')
			.addClass('del-me_' + delCount++)
			.insertAfter($('[id^= report]:last'))
	})

})

