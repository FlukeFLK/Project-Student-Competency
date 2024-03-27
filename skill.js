// skill.js
function drawSkillGraph(knowledgeScore, skillScore, abilityScore, behaviorScore) {
    const scores = [knowledgeScore, skillScore, abilityScore, behaviorScore];
    const labels = ['Knowledge', 'Skill', 'Ability', 'Behavior'];
    const container = document.getElementById('skillGraph');
    container.className = 'skill-chart-container';

    scores.forEach((score, index) => {
        const skillBar = document.createElement('div');
        skillBar.className = 'skill-bar';
        
        const bar = document.createElement('div');
        bar.style.height = `${score}%`; // Adjust height based on score
        bar.innerHTML = `${score}%`;
        
        const label = document.createElement('label');
        label.textContent = labels[index];

        skillBar.appendChild(bar);
        skillBar.appendChild(label);
        container.appendChild(skillBar);
    });
}
