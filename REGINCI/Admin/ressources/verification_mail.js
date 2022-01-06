function verifierMail(mail) {
  if ((mail.indexOf("@")>=0)&&(mail.indexOf(".")>=0)) {
    console.log(mail + " semble valide");
    return true;
  } else {
    console.log(mail + " n'est pas valide");
    alert("Mail invalide !");
    return false;
  }
}
