function post(to, body, func){
    let xml = new XMLHttpRequest();
    xml.addEventListener('readystatechange', function (){
        if(xml.status === 200 && xml.readyState === 4){
            func(xml.responseText);
        }
    })
    xml.open('POST', to, true)
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send(body);
}

const container = document.querySelector('.container');
const query_inp = document.querySelector('.query-inp');
const info_text = document.getElementById('info-text');
let prev_img = null;

document.querySelector('.query-form').addEventListener('submit', function(e){
    e.preventDefault();
    let query = query_inp.value.trim();
    if(query !== ''){
        info_text.classList.remove('display-none');
        if(prev_img !== null){
            prev_img.remove();
        }
        post('./call.php', 'query='+query, function(res){
            prev_img = document.createElement('img');
            prev_img.src = res;
            prev_img.style.marginTop = '3rem'
            info_text.classList.add('display-none');
            container.append(prev_img);
        })
    }
})