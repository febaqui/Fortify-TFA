class InputValidation {
    constructor() {
        this.emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        this.passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/
    }

    validate(input){
        switch (input.type){
            case 'email':
                return this.validateEmail(input.value)
            case 'text':
                return this.validateText(input.value)
            case 'password':
                return this.validatePassword(input.value)
            default:
                return false;
        }
    }

    validateEmail(email){
        return this.emailRegex.test(email);
    }

    validateText(text){
        return text !== '' && text !== null
    }

    validatePassword(password){
        return this.passwordRegex.test(password);
    }
}

export default InputValidation;
