$(document).ready(function() {
    var newButton = $("#newButton");
    var ft_list = $("#ft_list");
    var count = 0;
    var arr = {};
    
    newButton.click(function() {
        var taskToAdd = prompt("Please input a new 'todo': ");

        if (taskToAdd) {
            addTask(taskToAdd);
        }
    });

    var addTask = function(taskToAdd) {
        count++;
        var taskId = "todo" + count;
//        ft_list.prepend("<div>" + taskToAdd + "</div>").addClass(taskId).click(function() {
//            if (confirm("Are you sure you want to delete this 'todo'?")) {
//                this.remove();
//            }
//        });
        arr[taskId] = taskToAdd;
        ft_list.prepend($('<div class="todo" id=' + taskId + '" >' + taskToAdd + "</div>")).on("click", $("#" + taskId), function() {
            if (confirm("Are you sure you want to delete this 'todo'?")) {
                $(this).remove();
            }
        });
    }
});
