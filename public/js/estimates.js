function dropDown(id) {
        $('#dropdownBtn'+id).toggleClass('active').next().slideToggle(300);
}
function deleteChosen() {
    var allChbox = $('.checkbox');
    var allIds = $('.estimate-id');
    var CheckedIds = [];
    var k=0;

    for (i=0;i<allChbox.length;i++)
    {
        if (allChbox[i].checked)
        {
            CheckedIds[k] = allIds[i].innerHTML;
            console.log(CheckedIds[k]);
            k+=1;
        }
    }
    if (CheckedIds[k-1]!=null)
    {
        $.ajax({
            url: "/estimates",
            type: "DELETE",
            data: {
                CheckedIds: CheckedIds,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (data) => {
                $('.estimates-list').html(data);
            },
            error: (data) => {
                console.log('data')
            }
        });
    }
}

function deleteOne(id) {
    $.ajax({
        url: "/delete-one-estimate",
        type: "DELETE",
        data: {
            id: id,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            $('.estimates-list').html(data);
        },
        error: (data) => {
            console.log(data)
        }
    });
}

function double(id) {
    $.ajax({
        url: "/double-estimate",
        type: "POST",
        data: {
            id: id,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
            $('.estimates-list').html(data);
        },
        error: (data) => {
            console.log(data)
        }
    });
}

// function downloadChosen() {
//     var allChbox = $('.checkbox');
//     var allIds = $('.estimate-id');
//     var CheckedIds = [];
//     var k=0;
//
//     for (i=0;i<allChbox.length;i++)
//     {
//         if (allChbox[i].checked)
//         {
//             CheckedIds[k] = allIds[i].innerHTML;
//             k+=1;
//         }
//     }
//     $.ajax({
//         url: "pdf/generate-several",
//         type: "GET",
//         data: {
//             CheckedIds: CheckedIds,
//         },
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         },
//         success: (data) => {
//             console.log('Вышли успешно!')
//         },
//         error: (data) => {
//             console.log(data)
//         }
//     });
// }

// // SPOLLERS
// const spollersArray = document.querySelectorAll('[data-spollers]');
// if (spollersArray.length > 0) {
//     initSpollers(spollersArray);
// }
//
// function initSpollers(spollersArray) {
//     spollersArray.forEach(spollersBlock => {
//         if (matchMedia.matches || !matchMedia) {
//             spollersBlock.classList.add('_init');
//             initSpollerBody(spollersBlock);
//             spollersBlock.addEventListener("click", setSpollerAction);
//         } else {
//             spollersBlock.classList.remove('_init');
//             initSpollerBody(spollersBlock, false);
//             spollersBlock.removeEventListener("click", setSpollerAction);
//         }
//     })
// }
//
// function initSpollerBody(spollersBlock, hideSpollerBody = true) {
//     const spollerTitles = spollersBlock.querySelectorAll(['data-spoller']);
//     if (spollerTitles.length > 0) {
//         spollerTitles.forEach(spollerTitle => {
//             if (hideSpollerBody) {
//                 spollerTitle.removeAttribute('tabindex');
//                 if (!spollerTitle.classList.contains('_active')) {
//                     spollerTitle.nextElementSibling.hidden = true;
//                 }
//             } else {
//                 spollerTitle.setAttribute('tabindex', -1);
//                 spollerTitle.nextElementSibling.hidden = false;
//             }
//         });
//     }
// }
//
// function setSpollerAction(e) {
//     const el = e.target;
//     if (el.hasAttribute('data-spoller') || el.closest('[data-spoller]')) {
//         const spollerTitle = el.hasAttribute('data-spoller') ? el : el.closest('[data-spoller]');
//         const spollersBlock = spollerTitle.closest('[data-spollers]');
//         const oneSpoller = spollersBlock.hasAttribute('data-one-spoller');
//         if (!spollersBlock.querySelectorAll('._slide').length) {
//             if (oneSpoller && !spollerTitle.classList.contains('_active')) {
//                 hideSpollersBody(spollersBlock);
//             }
//             spollerTitle.classList.toggle('_active');
//             _slideToggle(spollerTitle.nextElementSibling,500);
//         }
//         e.preventDefault();
//     }
// }
//
// function hideSpollersBody(spollerBlock) {
//     const spollerActiveTitle = spollerBlock.querySelector('[data-spoller]._active');
//     if (spollerActiveTitle) {
//         spollerActiveTitle.classList.remove('_active');
//         _slideUp(spollerActiveTitle.nextElementSibling,500)
//     }
// }
//
//
// //SlideToggle
// let _slideUp = (target, duration=500) => {
//     if (!target.classList.contains('_slide')) {
//         target.classList.add('_slide');
//         target.style.transitionProperty = 'height, margin, padding';
//         target.style.transitionDuration = duration + 'ms';
//         target.style.height = target.offsetHeight + 'px';
//         target.offsetHeight;
//         target.style.overflow = 'hidden';
//         target.style.paddingTop = 0;
//         target.style.paddingBottom = 0;
//         target.style.marginTop = 0;
//         target.style.marginBottom = 0;
//         window.setTimeout(() => {
//             target.hidden = true;
//             target.style.removeProperty('height');
//             target.style.removeProperty('padding-top');
//             target.style.removeProperty('padding-bottom');
//             target.style.removeProperty('margin-top');
//             target.style.removeProperty('margin-bottom');
//             target.style.removeProperty('overflow');
//             target.style.removeProperty('transition-duration');
//             target.style.removeProperty('transition-property');
//             target.classList.remove('_slide');
//         }, duration);
//     }
// }
// let _slideDown = (target, duration=500) => {
//     if (!target.classList.contains('_slide')){
//         target.classList.add('_slide');
//         if (target.hidden) {
//             target.hidden = false;
//         }
//     }
//
//     /*target.style.removeProperty('display');
//     let display = window.getComputedStyle(target).display;
//
//     if (display === 'none')
//         display = 'block';
//
//     target.style.display = display;*/
//     let height = target.offsetHeight;
//     target.style.overflow = 'hidden';
//     target.style.height = 0;
//     target.style.paddingTop = 0;
//     target.style.paddingBottom = 0;
//     target.style.marginTop = 0;
//     target.style.marginBottom = 0;
//     target.offsetHeight;
//     target.style.transitionProperty = "height, margin, padding";
//     target.style.transitionDuration = duration + 'ms';
//     target.style.height = height + 'px';
//     target.style.removeProperty('padding-top');
//     target.style.removeProperty('padding-bottom');
//     target.style.removeProperty('margin-top');
//     target.style.removeProperty('margin-bottom');
//     window.setTimeout( () => {
//         target.style.removeProperty('height');
//         target.style.removeProperty('overflow');
//         target.style.removeProperty('transition-duration');
//         target.style.removeProperty('transition-property');
//         target.classList.remove('_slide');
//     }, duration);
// }
// let _slideToggle = (target, duration=500) => {
//     if (targer.hidden) {
//         return _slideDown(target, duration);
//     } else {
//         return _slideUp(target, duration);
//     }
// }
