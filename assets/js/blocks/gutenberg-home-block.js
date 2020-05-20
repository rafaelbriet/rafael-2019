const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;
const { RichText, InspectorControls, ColorPalette, blockControls } = wp.editor;
const { PanelBody } = wp.components;

registerBlockType('rafaelbriet/home-page', {
    title: __( 'Texto da Página Inicial', 'rafaelbriet' ),
    description: __( 'Texto personalizado para a página inicial', 'rafaelbriet' ),
    icon: 'format-image',
    category: 'formatting',
    attributes: {
        header: {
            type: 'string',
            source: 'html',
            selector: 'h2'
        },
        headerColor: {
            type: 'string',
            default: 'black'
        },
        headerBackgroundColor: {
            type: 'string',
        },
        body: {
            type: 'string',
            source: 'html',
            selector: 'p'
        },
        bodyColor: {
            type: 'string',
            default: 'black'
        },
        bodyBackgroundColor: {
            type: 'string',
        },
    },

    edit: ({ attributes, setAttributes }) => {
        const { header, headerColor, headerBackgroundColor,
                body, bodyColor, bodyBackgroundColor } = attributes;

        function OnHeaderChange(newValue) {
            setAttributes({ header: newValue });
        }

        function OnHeaderColorChange(newValue) {
            setAttributes({ headerColor: newValue });
        }

        function OnHeaderBackgroundColorChange(newValue) {
            setAttributes({ headerBackgroundColor: newValue });
        }

        function OnBodyChange(newValue) {
            setAttributes({ body: newValue });
        }

        function OnBodyColorChange(newValue) {
            setAttributes({ bodyColor: newValue });
        }

        function OnBodyBackgroundColorChange(newValue) {
            setAttributes({ bodyBackgroundColor: newValue });
        }

        return ([
            <InspectorControls>
                <PanelBody title={ __( 'Configurações do cabeçalho', 'rafaelbriet' ) }>
                    <p>{ __( 'Cor do texto', 'rafaelbriet') }</p>
                    <ColorPalette value={ headerColor } onChange={ OnHeaderColorChange } />
                    <p>{ __( 'Cor do fundo', 'rafaelbriet') }</p>
                    <ColorPalette value={ headerBackgroundColor } onChange={ OnHeaderBackgroundColorChange } />
                </PanelBody>

                <PanelBody title={ __( 'Configurações do corpo', 'rafaelbriet' ) }>
                    <p>{ __( 'Cor do texto', 'rafaelbriet') }</p>
                    <ColorPalette value={ bodyColor } onChange={ OnBodyColorChange } />
                    <p>{ __( 'Cor do fundo', 'rafaelbriet') }</p>
                    <ColorPalette value={ bodyBackgroundColor } onChange={ OnBodyBackgroundColorChange } />
                </PanelBody>
            </InspectorControls>,
            
            <div className="home-block-container">
                <h2>
                    <RichText key="editable" tagName="span" className="home-block-header" placeholder={ __( 'Cabeçalho', 'rafaelbriet' ) } value={ header } onChange={ OnHeaderChange } style={{ color: headerColor, backgroundColor: headerBackgroundColor, }} />
                </h2>
                <p>
                <RichText key="editable" tagName="span" className="home-block-p" placeholder={ __( 'Texto', 'rafaelbriet' ) } value={ body } onChange={ OnBodyChange } style={{ color: bodyColor, backgroundColor: bodyBackgroundColor, }} />
                </p>
            </div>
        ]);
    },

    save: ({ attributes }) => {
        const { header, headerColor, headerBackgroundColor,
            body, bodyColor, bodyBackgroundColor, } = attributes;

        return (
            <div className="home-block-container">
                <h2 className="home-block-header">
                    <RichText.Content tagName="span" value={ header } style={{ color: headerColor, backgroundColor: headerBackgroundColor, }} />
                </h2>
                <p className="home-block-p">
                    <RichText.Content tagName="span" value={ body } style={{ color: bodyColor, backgroundColor: bodyBackgroundColor, }} />
                </p>
            </div>  
        );
    },
});