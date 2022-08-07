const showHint = (str) => {
    if (str.length == 0) {
        document.getElementById("serverResponse").innerHTML = ""
    } else {
        const xmlhttp = new XMLHttpRequest()
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("serverResponse").innerHTML = this.responseText
            }
        }
        xmlhttp.open("GET", "xmlServer.php?q=" + str, true)
        xmlhttp.send()
    }
}

const fetchFromBackend = () => {
    
    let data
    const xmlhttp = new XMLHttpRequest()

    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            data = this.responseText
        }
    }

    xmlhttp.open("GET", "backend.php", true)
    xmlhttp.send()

    document.getElementById("prod").innerHTML = data
}

const getAllProducts = () => {
    data = fetchFromBackend()
    document.getElementById("prod").innerHTML = data
}

const renderProducts = () => {
    // data = []
    // const divEl = document.createElement("div")
    const divEl = document.getElementById("prod")
    const xmlhttp = new XMLHttpRequest()
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            // data = this.responseText
            divEl.innerHTML = this.responseText
        }
    }
    xmlhttp.open("GET", "getNames.php", true)
    xmlhttp.send()

    // divEl.innerHTML = document.getElementById("prod")
}