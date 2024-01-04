export function victoriesFunc() {
    var victoriesSubCategory = document.querySelectorAll('.victories__card-sub-category')

    victoriesSubCategory.forEach(category => {
        var sliced = category.textContent.slice(0, 1);
        if (sliced.length < category.length) {
            sliced += '...';
            console.log(sliced)
        }

    })

}