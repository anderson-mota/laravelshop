$('.summernote').summernote({
    height: 300
});

/*
 * function to file upload
 *
 */

const uploadButton = document.querySelector('.browse-btn');
const fileReturn = document.querySelector('.upload-return');
const realInput = document.getElementById('real-input');



uploadButton.addEventListener('click', (e) => {
    realInput.click();
});

function imageIsLoaded(e) {
    $(fileReturn).append('<img class="w-25 m-1" src=' + e.target.result + ' /></div>');
};


$(realInput).change(function() {
    if (this.files && this.files[0]) {
        for (var i = 0; i < this.files.length; i++) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[i]);
        }
    }
});


// function readURL(input) {
//     if(input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#teste').attr('src', e.target.result);
//         }

//         reader.readAsDataURL(input.files[0]);
//     }
// }

// $(realInput).change(function() {
//     readURL(this);
// });
