document.addEventListener('DOMContentLoaded', () => {
    const body = document.body;

    if (!document.getElementById('edit-habitat-form')) {
        const modalHtml = `
<div id="edit-habitat-form" class="hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-md bg-black/40">
  <form method="POST" action="edit.php" class="w-11/12 max-w-lg bg-[#1a2a22] rounded-xl border border-[#28392e] flex flex-col overflow-hidden">
    <div class="p-6 border-b border-[#28392e] flex justify-between items-center">
      <h3 class="text-white font-bold text-lg">Edit Habitat</h3>
      <button type="button" class="close-modal-btn text-[#9db9a6] hover:text-white">
        <span class="material-symbols-outlined">close</span>
      </button>
    </div>
    <div class="p-6 flex-1 space-y-4">
      <input type="hidden" name="id" id="edit-hab-id">
      <div>
        <label class="text-sm font-medium text-[#9db9a6]">Habitat Name</label>
        <input id="edit-hab-nom" name="nom" required class="w-full bg-transparent border border-[#5a6b60] rounded-lg px-3 py-2 text-white" type="text" />
      </div>
      <div>
        <label class="text-sm font-medium text-[#9db9a6]">Biome Type</label>
        <input id="edit-hab-typeclimat" name="typeclimat" required class="w-full bg-transparent border border-[#5a6b60] rounded-lg px-3 py-2 text-white" type="text" />
      </div>
      <div>
        <label class="text-sm font-medium text-[#9db9a6]">Description</label>
        <textarea id="edit-hab-desc" name="description" rows="4" class="w-full bg-transparent border border-[#5a6b60] rounded-lg px-3 py-2 text-white"></textarea>
      </div>
      <div>
        <label class="text-sm font-medium text-[#9db9a6]">Area / Zone</label>
        <input id="edit-hab-zonezoo" name="zonezoo" class="w-full bg-transparent border border-[#5a6b60] rounded-lg px-3 py-2 text-white" type="text" />
      </div>
    </div>
    <div class="p-6 border-t border-[#28392e] flex gap-3">
      <button type="button" class="close-modal-btn flex-1 px-4 py-2 border border-[#5a6b60] rounded-lg text-white">Cancel</button>
      <button type="submit" class="flex-1 px-4 py-2 bg-primary rounded-lg text-black font-bold">Save Changes</button>
    </div>
  </form>
</div>
`;
        const wrapper = document.createElement('div');
        wrapper.innerHTML = modalHtml;
        document.body.appendChild(wrapper.firstElementChild);
    }

    const editHabModal = document.getElementById('edit-habitat-form');

    document.addEventListener('click', (e) => {
        const trigger = e.target.closest('.edit-hab-btn');
        if (!trigger) return;

        const id = trigger.dataset.id || '';
        const nom = trigger.dataset.nom || '';
        const typeclimat = trigger.dataset.typeclimat || '';
        const desc = trigger.dataset.desc || '';
        const zonezoo = trigger.dataset.zonezoo || '';

        document.getElementById('edit-hab-id').value = id;
        document.getElementById('edit-hab-nom').value = nom;
        document.getElementById('edit-hab-typeclimat').value = typeclimat;
        document.getElementById('edit-hab-desc').value = desc;
        document.getElementById('edit-hab-zonezoo').value = zonezoo;

        editHabModal.classList.remove('hidden');
        body.classList.add('overflow-hidden');
        const first = editHabModal.querySelector('input, textarea, select');
        if (first) first.focus();
    });

    document.addEventListener('click', (e) => {
        if (e.target.closest('.close-modal-btn')) {
            if (!editHabModal.classList.contains('hidden')) editHabModal.classList.add('hidden');
            body.classList.remove('overflow-hidden');
        }
    });

    window.addEventListener('click', (e) => {
        if (e.target === editHabModal) {
            editHabModal.classList.add('hidden');
            body.classList.remove('overflow-hidden');
        }
    });

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            if (!editHabModal.classList.contains('hidden')) editHabModal.classList.add('hidden');
            body.classList.remove('overflow-hidden');
        }
    });

    // --- New Habitat modal show/hide logic ---
    const createForm = document.querySelector('form[action="./create.php"]');
    if (createForm) {
        // find ancestor modal container (has class 'fixed')
        let newHabModal = createForm.closest('[class*="fixed"]');
        if (!newHabModal) newHabModal = createForm.parentElement;

        // hide by default
        if (!newHabModal.classList.contains('hidden')) newHabModal.classList.add('hidden');

        const openSelectors = [];
        // mobile add button uses class 'md:hidden' — need to escape ':' when querying
        openSelectors.push('button.md\\:hidden');
        openSelectors.push('.open-new-hab');
        openSelectors.push('#open-new-hab');

        const openButtons = [];
        openSelectors.forEach(s => {
            document.querySelectorAll(s).forEach(el => openButtons.push(el));
        });

        openButtons.forEach(btn => btn.addEventListener('click', (ev) => {
            ev.preventDefault();
            newHabModal.classList.remove('hidden');
            body.classList.add('overflow-hidden');
            const first = newHabModal.querySelector('input, textarea, select');
            if (first) first.focus();
        }));

        // close when clicking cancel / close icon inside modal
        newHabModal.addEventListener('click', (ev) => {
            const btn = ev.target.closest('button');
            if (btn) {
                const span = btn.querySelector('span.material-symbols-outlined');
                const text = span ? span.textContent.trim().toLowerCase() : '';
                const btnText = btn.textContent.trim().toLowerCase();
                if (text === 'close' || btnText === 'cancel' || btn.classList.contains('close-modal-btn')) {
                    newHabModal.classList.add('hidden');
                    body.classList.remove('overflow-hidden');
                }
            }
            // click outside form (overlay)
            if (ev.target === newHabModal) {
                newHabModal.classList.add('hidden');
                body.classList.remove('overflow-hidden');
            }
        });

        // Esc key closes newHabModal as well
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                if (!newHabModal.classList.contains('hidden')) newHabModal.classList.add('hidden');
                body.classList.remove('overflow-hidden');
            }
        });
    }
});
