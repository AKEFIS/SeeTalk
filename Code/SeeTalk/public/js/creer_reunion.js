let pluses = document.querySelectorAll(".plus");
let members = document.querySelectorAll(".member")
let selected = [];
let selectedIds = [];
let submitButton = document.querySelector("#submit-create-reunion");

console.log(pluses);


members.forEach((member, index)=> {
    member.addEventListener('click', function () {
        selectedName = document.getElementById(member.id).id
        if (!(selected.includes(selectedName))) {
            selected.push(selectedName)
        } else {
            selected.splice(selected.indexOf(selectedName), 1)
        }
        console.log(selected);
        
        
        document.getElementById('members-list').textContent = JSON.stringify(selected);
    })  
})

pluses.forEach((plus, index)=> {
    plus.addEventListener('click', function () {
        selectedId = document.getElementById(plus.id).id
        if (!(selectedIds.includes(selectedId))) {
            selectedIds.push(selectedId)
        } else {
            selectedIds.splice(selectedIds.indexOf(selectedId), 1)
        }
        console.log(selectedIds);
        
        
    })  
})

submitButton.addEventListener('click', function () {
    let jsonMembersList = document.querySelector("#json-members-list");
    jsonMembersList.value = JSON.stringify(selectedIds);
})