/* eslint-disable */
/* tslint:disable */
/**
 * This is an autogenerated file created by the Stencil compiler.
 * It contains typing information for all components that exist in this project.
 */
import { HTMLStencilElement, JSXBase } from "@stencil/core/internal";
export namespace Components {
    interface PwHeader {
    }
}
declare global {
    interface HTMLPwHeaderElement extends Components.PwHeader, HTMLStencilElement {
    }
    var HTMLPwHeaderElement: {
        prototype: HTMLPwHeaderElement;
        new (): HTMLPwHeaderElement;
    };
    interface HTMLElementTagNameMap {
        "pw-header": HTMLPwHeaderElement;
    }
}
declare namespace LocalJSX {
    interface PwHeader {
    }
    interface IntrinsicElements {
        "pw-header": PwHeader;
    }
}
export { LocalJSX as JSX };
declare module "@stencil/core" {
    export namespace JSX {
        interface IntrinsicElements {
            "pw-header": LocalJSX.PwHeader & JSXBase.HTMLAttributes<HTMLPwHeaderElement>;
        }
    }
}
