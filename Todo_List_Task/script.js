$(document).ready(function(){
  function showData() {
    $.ajax ({
      url: 'show.php',
      type: 'post',
      success: function(result){
        $("#data").html(result);
      }
    });
  }
  showData();

  $("#btn").on("click", function(e){
    e.preventDefault();
    txt = $("#txt").val();

    $.ajax({
      url: 'insert.php',
      type: 'post',
      data: {txt: txt},
      success: function(result){
        if (result == 1) {
          txt = $("#txt").val('');
          alert("Todo List Added Successfully.");
          showData();
          totalTask();
        }else {
          console.log(result);
        }
      }
    });
  });

  $(document).on("click", "#delete", function(){
    id = $(this).data("id");
    element = $(this);

    $.ajax({
      url: 'delete.php',
      type: 'post',
      data: {id: id},
      success: function(result) {
        if (result == 1) {
          $(element).closest("li").fadeOut();
          showData();
          totalTask();
        }
      }
    });
  });

});

function displayDate(){
  let date = new Date()
  date = date.toString().split(" ")
  document.querySelector("#date").innerHTML = date[1] + " " + date[2] + " " + date[3]
}

window.onload = function(){
  displayDate()
}