const allDetails = document.querySelectorAll('.products-by-suppliers section details, .products-by-industries section details');
const collapseBtn = document.querySelector('#collapse-all');

function openCloseAllDetails() {
    if(collapseBtn.innerHTML === 'Collapse'){
        Array.from(allDetails).forEach((child)=>{
            child.open = true;
        });
        collapseBtn.innerHTML = 'Uncollapse';
    } else {
        Array.from(allDetails).forEach((child)=>{
            child.open = false;
        });
        collapseBtn.innerHTML = 'Collapse';
    }
    
}

collapseBtn.addEventListener('click', openCloseAllDetails);