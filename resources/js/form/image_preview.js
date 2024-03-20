const inputImage = document.getElementById('image');
const previewContainer = document.getElementById('preview');
const emptyPlaceholder = 'https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg'




//che quando cambio qualcosa nell'input
inputImage.addEventListener('input', () => {
    previewContainer.src = inputImage.value ? inputImage.value : emptyPlaceholder
        
})


//slug 
const slugContainer = document.getElementById("slug");
const titleContainer = document.getElementById("title");


slugContainer.value = titleContainer.value.trim().split(' ').join('-');
titleContainer.addEventListener('blur', () => {
    slugContainer.value = titleContainer.value.trim().split(" ").join("-");
})