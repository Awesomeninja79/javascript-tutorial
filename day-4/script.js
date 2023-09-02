// Function Call

// userCheckEmail();



// Add Event listener

// document.getElementById("loginBtn").addEventListener("click", userCheckEmail);




// Function

function userAuth(name, age) {

    // alert("Hii My name is "+ name +". My age is 24.");
    alert(`Hii My Name is ${name}. My Age is ${age}.`);

    console.log(name, age);
}


// Check User Email

function userCheckEmail() {

    var checkUser = window.prompt("What is your Email?");

    const registeredEmail = "test@gmail.com";

    if (checkUser == registeredEmail) {

        // Fullfill Condition
        // window.alert("Successfully Login!");

        document.getElementById("userInfo").innerText = `Your Email is ${checkUser}: Correct`;

    } else {
        const checkAgain = window.confirm(`Error! Do you want to login again?`);

        if(checkAgain == true) {
            userCheckEmail();
        }

        // console.log(checkAgain);
    }
    
    // console.log(checkUser);


}


// Check value of select

function selectValue(value) {
    alert(`You select : ${value}`);
    console.log(value);
}