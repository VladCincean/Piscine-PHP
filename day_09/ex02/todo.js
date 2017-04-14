window.onload = function() {
    var newButton = document.getElementById("newButton");
    var ft_list = document.getElementById("ft_list");
    var count = 0;
    newButton.addEventListener("click", function() {
        var taskToAdd = prompt("Please input a new 'todo': ");

        if (taskToAdd) {
            addTask(taskToAdd);
        }
    });

    function addTask(taskToAdd) {
        count++;
        var taskId = "todo" + count;
        setCookie(taskId, taskToAdd, 1);

        var todo = document.createElement("div");
        todo.id = taskId;
        todo.appendChild(document.createTextNode(taskToAdd));
        todo.addEventListener("click", function(ev) {
            if (confirm("Are you sure you want to delete this 'todo'?")) {
                setCookie(ev.target.id, "", -1);
                ev.target.remove();
            }
        });
        ft_list.insertBefore(todo, ft_list.childNodes[0]);
    }

    var cookie = document.cookie.split(";");
    for (var i = 0; i < cookie.length; i++) {
        var cook = cookie[i].trim();
        if (cook.indexOf("todo") === 0) {
            var key_value = cook.split("=");
            setCookie(key_value[0], "", -1);
            addTask(key_value[1]);
        }
    }

    // Source: https://www.w3schools.com/js/js_cookies.asp
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
}
