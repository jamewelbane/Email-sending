<?php

//success message alert
function handleValidationSuccess($successMessage)
{
    echo "<script>
          var successMessage = '" . $successMessage . "';
          if (successMessage) {
              if (confirm(successMessage)) {
                window.location.href = '../index.html';
              }
          }
        </script>";
}

//error message alert
function handleValidationError($errorMessage)
{
    echo "<script>
              var errorMessage = '" . $errorMessage . "';
              if (errorMessage) {
                  if (confirm(errorMessage)) {
                    history.back();
                  }
              }
            </script>";
}
