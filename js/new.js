const search = document.getElementById('search');
const matchList = document.getElementById('match-list');

//search state.json
const searchState = async searchText => {
    const res = await fetch('../data/new.json');
    const states = await res.json();

    //get matches
    let matches = states.filter(state => {
        const regex = new RegExp(`^${searchText}`, 'gi');
        return state.name.match(regex); //|| state.abbr.match(regex);
    });

    if(searchText.length === 0) {
        matches = [];
        matchList.innerHTML = '';
    };
    
    outputHtml(matches);
};

//show result
const outputHtml = matches => {
    if(matches.length > 0) {
        const html = matches.map(match => `
            <div class="card all-list card-body mb-1" style="padding: 10px 20px; background: rgb(244, 244, 245);">
                <h4><a target="_blank" href="${match.file}">${match.name} <span style="color:#000;">(${match.year})</span></a> </h4>
                <h6>Topic: ${match.topic} <span class="text-secondary">  ${match.Info}</span></h6>
            </div>
        `).join('');
        
        matchList.innerHTML = html;
    }
}

search.addEventListener('input', () => searchState(search.value));