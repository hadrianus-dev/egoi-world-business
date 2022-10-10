<div class="comment-form">
    <h3 class="comment-form__title">Deixe seu Comentário</h3>
    <form wire:submit.prevent='comment' action="#" class="comment-one__form contact-form-validated" novalidate="novalidate">
        <div class="row">
            <div class="col-xl-6">
                <div class="comment-form__input-box">
                    <input wire:model='comment.name' type="text" placeholder="Seu nome" name="name">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="comment-form__input-box">
                    <input wire:model='comment.email' type="email" placeholder="Email" name="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="comment-form__input-box text-message-box">
                    <textarea wire:model='comment.body' name="message" placeholder="Comentário"></textarea>
                </div>
                <div class="comment-form__btn-box">
                    <button type="submit" class="thm-btn comment-form__btn">Submeter</button>
                </div>
            </div>
        </div>
    </form>
</div>
