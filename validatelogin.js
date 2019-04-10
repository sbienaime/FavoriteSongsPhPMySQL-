//Login and Registration validation 

function validate(form)
      {
       
        fail = validateUsername(form.username.value)
        fail += validatePassword(form.password.value)
        if (fail == "")     return true
        else { alert(fail); return false }
      }
 


function validateUsername(field)
      {
        if (field == "") return "No Username was entered.\n"
        else if (field.length < 5)
          return "Usernames must be at least 5 characters.\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
        return ""
      }


function validatePassword(field)
      {
        if (field == "") return "No Password was entered.\n"
        else if (field.length < 6)
          return "Passwords must be at least 6 characters.\n"
        else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
                 !/[0-9]/.test(field))
          return "Passwords require one each of a-z, A-Z and 0-9.\n"
        return ""
      }




//Table data validation 


function validateInsert(form)
      {
       
        fail = validateAuthor(form.author.value)
        fail += validateTitle(form.title.value)
        fail += validateArtist(form.singer.value)
        fail += validate_year(form.year.value)
        if (fail == "")     return true
        else { alert(fail); return false }
      }




function validateUpdate(form)
      {
          
        fail = validate_id(form.id.value)
        fail += validateAuthor(form.author.value)
        fail += validateTitle(form.title.value)
        fail += validateArtist(form.singer.value)
        fail += validate_year(form.year.value)
        if (fail == "")     return true
        else { alert(fail); return false }
      }



function validateDelete(form)
      {
       
        fail = validate_id(form.id.value)
        if (fail == "")     return true
        else { alert(fail); return false }
      }




 function validate_id($field)
  {
    if ($field == "") return "No id was entered\n";
    else if ($field < 1 || $field > 99 )
      return "id must be between 1 and 99 \n";
    return "";
  }

function validateAuthor(field)
      {
        if (field == "") return "No Author was entered.\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in Author field.\n"
        return ""
      }


function validateTitle(field)
      {
        if (field == "") return "No title was entered.\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in title.\n"
        return ""
      }



function validateArtist(field)
      {
        if (field == "") return "No artist was entered.\n"
        else if (/[^a-zA-Z0-9_-]/.test(field))
          return "Only a-z, A-Z, 0-9, - and _ allowed in Artist field.\n"
        return ""
      }





  function validate_year($field)
  {
    if ($field == "") return "No year was entered. \n";
    else if ($field < 1800 || $field > 2019)
      return "year must be between 1800 and 2019. \n";
    return "";
  }

