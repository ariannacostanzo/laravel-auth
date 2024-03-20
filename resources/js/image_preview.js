const inputImage = document.getElementById('image');
const previewContainer = document.getElementById('preview');
const emptyPlaceholder = 'https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg'

//lo faccio sia subito

//che quando cambio qualcosa nell'input
inputImage.addEventListener('input', () => {
    previewContainer.src = inputImage.value ? inputImage.value : emptyPlaceholder
        
})