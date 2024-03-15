document.addEventListener('DOMContentLoaded', (event) => {
    const title = document.getElementById('unique_code');
    const test = document.getElementById('test');
    let codes = [];
    console.log(test);

    function randomCode () {
        let code;
        do {
            code = Math.floor(Math.random() * 1000000);
        } while (codes.includes(code));
        console.log(code);
        codes.push(code);
        console.log(codes);
        title.innerHTML = code;
        console.log(code);
        return code;
    }

    test.addEventListener('submit', randomCode());
});