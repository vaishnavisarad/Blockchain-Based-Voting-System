
$(document).on("click","#startQuiz", function(){
	  var thisId = $(this).data('id');
	  Swal.fire({
      title: 'Are you sure?',
      text: 'You want to take this Vote now, your time will start automaticaly',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, start now!'
 }).then((result) => {
  if (result.value) {
         $.ajax({
          type : "post",
          url : "query/selVoteAttemptExe.php",
          dataType : "json",  
          data : {thisId:thisId},
          cache : false,
          success : function(data){
            if(data.res == "alreadyVote")
            {
              Swal.fire(
                'Already Taken ',
                'you already take this Vote',
                'error'
              )
            }
            else if(data.res == "takeNow")
            {
              window.location.href="home.php?page=Vote&id="+thisId;
              return false;
            }
          },
          error : function(xhr, ErrorStatus, error){
            console.log(status.error);
          }

        });




  }
 });
	return false;
})



// Reset Vote Form
$(document).on("click","#resetVoteFrm", function(){
      $('#submitAnswerFrm')[0].reset();
      return false;
});





// Select Time Limit
var mins
var secs;

function cd() {
  var timeVoteLimit = $('#timeVoteLimit').val();
  mins = 1 * m("" + timeVoteLimit); // change minutes here
  secs = 0 + s(":01"); 
  redo();
}

function m(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(0, i));
}

function s(obj) {
  for(var i = 0; i < obj.length; i++) {
      if(obj.substring(i, i + 1) == ":")
      break;
  }
  return(obj.substring(i + 1, obj.length));
}

function dis(mins,secs) {
  var disp;
  if(mins <= 9) {
      disp = " 0";
  } else {
      disp = " ";
  }
  disp += mins + ":";
  if(secs <= 9) {
      disp += "0" + secs;
  } else {
      disp += secs;
  }
  return(disp);
}

function redo() {
  secs--;
  if(secs == -1) {
      secs = 59;
      mins--;
  }
  document.cd.disp.value = dis(mins,secs); 
  if((mins == 0) && (secs == 0)) {
    $('#VoteAction').val("autoSubmit");
     $('#submitAnswerFrm').submit();
  } else {
    cd = setTimeout("redo()",1000);
  }
}

function init() {
  cd();
}
window.onload = init;
