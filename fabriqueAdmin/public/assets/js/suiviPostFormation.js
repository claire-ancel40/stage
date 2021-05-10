
const selectFormations = document.querySelector("#selectFormations");
// console.log(select);
selectFormations.addEventListener("change", changeFunction);
function changeFunction(e) {
  const value = e.target.value;
  let route= "/changeFormationSelect/" +value;

  const selectPromotions = document.querySelector("#selectPromotions");
  fetch(route)
  .then(response => response.json())
  .then(datas => {
      console.log(datas);
      selectPromotions.innertHtml = "";
      const option0 = document.createElement("option");
      option0.value = 0;
      option0.textContent = "*******";
      selectPromotions.appendChild(option0);
      for(data of datas) {
          console.log(data.Annee);
          let option = document.createElement("option");
          option.value = data.id;
          option.textContent = data.Annee;
          console.log(option);
          selectPromotions.appendChild(option);
      }
    }
  );

}
