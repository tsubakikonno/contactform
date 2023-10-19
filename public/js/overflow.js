function replaceZtoH(str){
    return str.replace(/[！-～]/g, function(s){
      return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
    });
  }
  const el = document.getElementById('demo');
  demo.addEventListener ("blur", () => {
     const br = el.value;
     const ar = replaceZtoH(br);
     el.value = ar;
  });