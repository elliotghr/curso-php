document.addEventListener("submit", async (e) => {
  if (e.target.matches("#ajax")) {
    e.preventDefault();

    let fichero = Array.from(e.target.fichero.files);
    let formData = new FormData();

    formData.append("fichero", fichero[0]); // Solo se toma el primer archivo

    const options = {
      method: "POST",
      body: formData,
    };

    try {
      let res = await fetch("./upload.php", options);
      if (!res.ok) throw { status: res.status, statusText: res.statusText };
      let json = await res.json();
      console.log(json);
      alert(json.status);
    } catch (error) {
      console.log(error);
    }
  }
});
