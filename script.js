fetch("participants.json")
.then(function(response){
	return response.json();
})
.then(function(participants){
	let placeholder = document.querySelector("#data-output");
	let out = "";
	for(let participant of participants){
		out += `
			<ul>
                <li><img src="assets/tek-chars/tek-icon-${Math.floor(Math.random() * 10) + 1}.png"></li>
				<li><p>${participant.name}</p></li>
				<li class="user-list-nicks"><p>${participant.nick}</p></li>
			</ul>
		`;
	}

	placeholder.innerHTML = out;
});