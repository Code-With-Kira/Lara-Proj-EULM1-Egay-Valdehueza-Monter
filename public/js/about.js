const storyToggle = document.querySelector('[data-story-toggle]');
const storyDetails = document.getElementById('story-details');
const storyToggleLabel = storyToggle?.querySelector('[data-story-toggle-label]');
const storyToggleIcon = storyToggle?.querySelector('[data-story-toggle-icon]');

if (storyToggle && storyDetails && storyToggleLabel && storyToggleIcon) {
    storyToggle.addEventListener('click', () => {
        const isExpanded = storyToggle.getAttribute('aria-expanded') === 'true';
        storyToggle.setAttribute('aria-expanded', String(!isExpanded));
        storyDetails.hidden = isExpanded;
        storyToggleLabel.textContent = isExpanded ? 'Read more about the project' : 'Read less about the project';
        storyToggleIcon.textContent = isExpanded ? '+' : '−';
    });
}
