function updateCounter() {
	// API giver dig mulighed for at oprette simpel numeriske tællere med 1
    fetch('https://api.countapi.xyz/update/race.com/counter/?amount=1')
        .then(res => res.json())
        .then(data => counterElement.innerHTML = data.value)
}
updateCounter();

//count viser besøgertal
counterElement = document.getElementsByClassName('count')[0]; 


