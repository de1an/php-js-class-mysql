class DB {
    static getData(){
        return new Promise((resolve, reject) => {
            let xml = new XMLHttpRequest();
            xml.open("get", "get_all_data.php");
            xml.onreadystatechange = function() {
                if (xml.status === 200 && xml.readyState === 4) {
                    resolve(JSON.parse(xml.responseText));
                }
            }
            xml.send();
        });
    }
    static findStudent(email){
        let form = new FormData();
        form.append("email", email);
        return new Promise((resolve, reject) => {
            let xml = new XMLHttpRequest();
            xml.open("post", "find_student.php");
            xml.onreadystatechange = function() {
                if (xml.status === 200 && xml.readyState === 4) {
                    resolve(JSON.parse(xml.responseText));
                }
            }
            xml.send(form);
        });
    }
}