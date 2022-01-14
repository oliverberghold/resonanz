let scrollpos = window.scrollY
const header = document.querySelector('.site-header')
const header_height = header.offsetHeight

const add_class_on_scroll = () => header.classList.add('site-header--shadow')
const remove_class_on_scroll = () => header.classList.remove('site-header--shadow')

// window.addEventListener('scroll', function() {
// 	scrollpos = window.scrollY;
// 	if (scrollpos >= header_height) {
// 		add_class_on_scroll()
// 	} else {
// 			remove_class_on_scroll()
// 		}
// 		console.log(scrollpos)
// })

window.addEventListener('scroll', function() {
	scrollpos = window.scrollY;
	if (scrollpos >= 10) {
		add_class_on_scroll()
	} else {
			remove_class_on_scroll()
		}
		console.log(scrollpos)
})
