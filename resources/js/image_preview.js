const inputImage = document.getElementById('image');
const previewContainer = document.getElementById('preview');
const emptyPlaceholder = 'https://bub.bh/wp-content/uploads/2018/02/image-placeholder.jpg'

console.log(inputImage)
inputImage.addEventListener('input', () => {
    inputImage.value ? previewContainer.src = inputImage.value : emptyPlaceholder;
})